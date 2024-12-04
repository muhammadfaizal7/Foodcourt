<div class="text-center">
    <h1>Graphic Keseluruhan Penjualan Food Court ETAM per-bulan</h1>
    <hr>
</div>

<div>
    <h3>Pilih Tahun</h3>
    <form method="post">
        <select class="form-select" name="tahunCari">
            <?php
            include "connect.php";
            $sql = "SELECT DISTINCT tahun FROM penjualan_per_tenant ORDER BY tahun DESC";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['tahun'] . "'>" . $row['tahun'] . "</option>";
                }
            } else {
                echo "<option value=''>Data tidak tersedia</option>";
            }
            ?>
        </select>
        <br style="margin-top: -10px;">
        <input type="submit" name="search" value="Tampilkan" class="btn btn-info" id="defaultOpen">
    </form>
</div>

<canvas id="myChartBulanan" width="300" height="90"></canvas>

<?php
// Daftar warna yang berbeda untuk setiap tenant
$colors = [
    'rgba(255, 99, 132, 0.6)', // Warna untuk Tenant 1
    'rgba(54, 162, 235, 0.6)', // Warna untuk Tenant 2
    'rgba(255, 206, 86, 0.6)', // Warna untuk Tenant 3
    'rgba(75, 192, 192, 0.6)', // Warna untuk Tenant 4
    'rgba(153, 102, 255, 0.6)', // Warna untuk Tenant 5
    'rgba(255, 159, 64, 0.6)', // Warna untuk Tenant 6
    'rgba(255, 99, 132, 0.6)', // Warna untuk Tenant 7
    'rgba(54, 162, 235, 0.6)', // Warna untuk Tenant 8
    'rgba(255, 206, 86, 0.6)', // Warna untuk Tenant 9
    'rgba(75, 192, 192, 0.6)', // Warna untuk Tenant 10
    'rgba(153, 102, 255, 0.6)', // Warna untuk Tenant 11
    'rgba(255, 159, 64, 0.6)'  // Warna untuk Tenant 12
];

$data = [
    'labels' => ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
    'datasets' => []
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tahunCari = $_POST['tahunCari'];

    // Ambil data penjualan per tenant berdasarkan tahun yang dipilih
    $sql = "SELECT tenant_name, 
                    SUM(CASE WHEN bulan = 1 THEN total_penjualan ELSE 0 END) AS jan,
                    SUM(CASE WHEN bulan = 2 THEN total_penjualan ELSE 0 END) AS feb,
                    SUM(CASE WHEN bulan = 3 THEN total_penjualan ELSE 0 END) AS mar,
                    SUM(CASE WHEN bulan = 4 THEN total_penjualan ELSE 0 END) AS apr,
                    SUM(CASE WHEN bulan = 5 THEN total_penjualan ELSE 0 END) AS mei,
                    SUM(CASE WHEN bulan = 6 THEN total_penjualan ELSE 0 END) AS jun,
                    SUM(CASE WHEN bulan = 7 THEN total_penjualan ELSE 0 END) AS jul,
                    SUM(CASE WHEN bulan = 8 THEN total_penjualan ELSE 0 END) AS ags,
                    SUM(CASE WHEN bulan = 9 THEN total_penjualan ELSE 0 END) AS sep,
                    SUM(CASE WHEN bulan = 10 THEN total_penjualan ELSE 0 END) AS okt,
                    SUM(CASE WHEN bulan = 11 THEN total_penjualan ELSE 0 END) AS nov,
                    SUM(CASE WHEN bulan = 12 THEN total_penjualan ELSE 0 END) AS des
            FROM penjualan_per_tenant
            WHERE tahun = '$tahunCari'
            GROUP BY tenant_name";

    $query = mysqli_query($conn, $sql);
    $colorIndex = 0; // Menyimpan indeks warna untuk tenant

    // Ambil data penjualan per tenant
    while ($row = mysqli_fetch_assoc($query)) {
        $data['datasets'][] = [
            'label' => $row['tenant_name'],
            'data' => [
                $row['jan'], $row['feb'], $row['mar'], $row['apr'],
                $row['mei'], $row['jun'], $row['jul'], $row['ags'],
                $row['sep'], $row['okt'], $row['nov'], $row['des']
            ],
            'backgroundColor' => $colors[$colorIndex],  // Pilih warna berdasarkan tenant
            'borderColor' => str_replace('0.6', '1', $colors[$colorIndex]),  // Warna border sedikit lebih gelap
            'borderWidth' => 1
        ];

        // Update indeks warna untuk tenant berikutnya
        $colorIndex++;
        if ($colorIndex >= count($colors)) {
            $colorIndex = 0; // Kembali ke warna pertama jika melebihi jumlah warna
        }
    }

    // Jika tidak ada data, set dataset kosong
    if (empty($data['datasets'])) {
        $data['datasets'] = [];
    }
}

// Konversi data PHP ke JSON
$json_data = json_encode($data);
?>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil data dari PHP
    var dataFromPHP = <?php echo $json_data; ?>;

    var ctx = document.getElementById('myChartBulanan').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',  // Tipe grafik bar
        data: {
            labels: dataFromPHP.labels,  // Label bulan
            datasets: dataFromPHP.datasets  // Data dari PHP (penjualan per tenant)
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true  // Mulai sumbu Y dari 0
                }
            }
        }
    });
</script>
