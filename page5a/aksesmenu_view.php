    <div>
        <img src='../image/kopsurat.jpg' width= '100%'>
    </div>
    <center>
    <h2>FORMULIR PENGAJUAN PINJAMAN</h2>
    </center>
    <hr>

    <?php
    include "../connect.php";

        $id = $_GET['id'];

        $sql = "SELECT * FROM t_ajuanpinjam where aktif=1 AND  id=$id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nofpp = $row['nofpp'];
            $tanggal = $row['tanggal'];
            $noanggota = $row['noanggota'];
            $pinjam = $row['jumlah'];
            $lama = $row['lamapinjam'];

        }}

        $sql = "SELECT * FROM t_anggota where aktif=1 AND  noanggota=$noanggota";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nomor = $row['noanggota'];
            $nama = $row['namaanggota'];
            $alamat = $row['alamat'];
            $nohp = $row['nohp'];
        }}


    ?>

    <div>
        <p>Nomor FPP :<b> <?php echo $nofpp; ?></b> </p>
        <p>Tanggal :<b> <?php echo $tanggal; ?></p> </b>
    </div>

    <b>Data Pemohon </b>
    <center>
    <table border=1>
        <thead>
            <th>Nomor Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
        </thead>
        <tbody>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $nohp; ?></td>
        </tbody>

    </table>
    </center>
    <div>
        <p>Jumlah Ajuan Pinjaman : <?php echo $pinjam; ?>,-</p>
        <p>Usulan Lama Pinjaman : <?php echo $lama; ?> bulan</p>

    </div>

    <p>Proses Pengajuan akan di periksa oleh bagian kredit, Silahkan menunggu dalam kurun waktu 2 x 24 jam </p>

    <div style="text-align: right;">
        <p>Samarinda, <?php date('d'); ?>/<?php echo date('m'); ?>/<?php echo date('Y'); ?>
        <p>Pemohon</p>
        <br>
        <br>
        <br>
        <u><?php echo $nama;  ?></u><br>
        <?php echo $nomor;  ?>
    </div>