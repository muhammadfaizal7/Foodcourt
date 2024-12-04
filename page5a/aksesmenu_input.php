<h3>INPUT DAFTAR MENU</h3>
<hr>

<?php
    include "connect.php";

    // Query untuk menghitung jumlah menu yang ada
    $sql = "SELECT * FROM tbl_menu";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Menghitung jumlah data yang ada di tabel tbl_menu
        $jmldata = mysqli_num_rows($result) + 1;

        // Mendapatkan bulan dan tahun saat ini
        $bln = date('m');
        $thn = date('Y');

        // Membuat nomor urut no_menu dengan format yang diinginkan
        $no_menu = $jmldata . "/" . $bln . "/FCE-" . $thn;
    } else {
        // Jika gagal, set nomor menu menjadi 1
        $jmldata = 1;
        $bln = date('m');
        $thn = date('Y');
        $no_menu = $jmldata . "/" . $bln . "/FCE-" . $thn;
    }

    $identity = $_SESSION["identity"];
    
    // Mengambil data tenant berdasarkan identity
    $sql = "SELECT * FROM t_tenant WHERE no_tenant='$identity' AND aktif=1";
    $result = mysqli_query($conn, $sql);
    $no = 1;
            if ($result) {
                
                //echo "Jalan";
                while($row = mysqli_fetch_assoc($result)){
                    // var_dump($row);
                $no_tenant = $row['no_tenant'];
                }
            }else{
                    // var_dump($row);
                $no_tenant = $row['no_tenant'];
                }
?>

<form action="page5a/aksesmenu_inputproses.php" method="post" enctype="multipart/form-data">

    <div class="mb-3 mt-3">
        <label for="no_menu" class="form-label">Nomor Menu: </label>
        <input type="text" class="form-control" id="no_menu" name="no_menu" value="<?php echo $no_menu; ?>" readonly>
    </div>
    <div class="mb-3 mt-3">
        <label for="no_tenant" class="form-label">Nomor Tenant: </label>
        <input type="text" class="form-control" id="no_tenant" name="no_tenant" value="<?php echo $no_tenant; ?>" readonly>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto Menu:</label>
        <input type="file" class="form-control" id="foto" name="foto" required>
    </div>

    <div class="mb-3">
        <label for="jenis_menu" class="form-label">Jenis Menu:</label>
        <select class="form-control" id="jenis_menu" name="jenis_menu" required>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Menu:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>

    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="my.php?p=aksesmenu" class="btn btn-warning">Kembali</a>
</form>
