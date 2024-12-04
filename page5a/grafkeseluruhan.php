<div class="text-center">
    <h1>Graphic Keseluruhan Penjualan Food Court ETAM per-bulan</h1>
    <hr>
</div>

<div>
    <h3>Pilih Bulan</h3>
    <form method="post">
        <select class="form-select" name="tahunCari">
            <?php
            include "connect.php";
            $sql = "SELECT tahun FROM tbl_bulan";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data dari setiap baris
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
// Inisialisasi variabel $data
$data = [
    'label' => ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
    'values' => array_fill(0, 12, 0) // Atur nilai default ke 0
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tahunCari = $_POST['tahunCari'];

    // Perbaiki query SQL dengan menambahkan tanda kutip untuk string
    $sql = "SELECT * FROM tbl_bulan WHERE tahun='$tahunCari'";
    $query = mysqli_query($conn, $sql);

    // Cek hasil query
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $data['values'] = [
                $row['jan'], $row['feb'], $row['mar'], $row['apr'],
                $row['mei'], $row['jun'], $row['jul'], $row['ags'],
                $row['sep'], $row['okt'], $row['nov'], $row['des']
            ];
        }
    } else {
        // Jika tidak ada data untuk tahun yang dipilih, gunakan nilai default
        $data['values'] = array_fill(0, 12, 0);
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
        type: 'bar',
        data: {
            labels: dataFromPHP.label,
            datasets: [{
                label: 'Data Keselurhan Penjualanan menurut tahun  ' + <?php echo $tahunCari ?> + ' Food Court ETAM',
                data: dataFromPHP.values,
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                ],
                borderWidth: 1,
                borderRadius: 20
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
