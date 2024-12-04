    <?php
        include "connect.php";

        $id = $_GET['id'];
        $sql = "SELECT * FROM t_tenant WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $nomor_tenant = $row['no_tenant'];
                $nama_tenant = $row['nama'];
                $jenis = $row['jenis'];
                $lokasi = $row['lokasi'];
                $jam_operasional = $row['jam_operasional'];
            }
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Tenant</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulir Pendaftaran Tenant</h2>
        <form action="page5a/tenant_editproses.php?id=<?php echo $id ?>" method="POST">
        <div class="mb-3">
            <label for="nomor_tenant" class="form-label">Nomor Tenant</label>
            <input type="text" class="form-control" id="nomor_tenant" name="nomor_tenant" value="<?php echo $nomor_tenant ?>">
        </div>
        <div class="mb-3">
            <label for="nama_tenant" class="form-label">Nama Tenant</label>
            <input type="text" class="form-control" id="nama_tenant" name="nama_tenant" value="<?php echo $nama_tenant ?>">
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Tenant</label>
            <select class="form-select" name="jenis" id="jenis">
            <option value="Makanan" <?php if ($jenis == "Makanan") echo "selected"; ?>>Makanan</option>
            <option value="Minuman" <?php if ($jenis == "Minuman") echo "selected"; ?>>Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?php echo $lokasi ?>">
        </div>
        <div class="mb-3">
            <label for="jam_operasional" class="form-label">Jam Operasional</label>
            <input type="text" class="form-control" id="jam_operasional" name="jam_operasional" value="<?php echo $jam_operasional ?>">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        <br>
        <a href="#" class="btn btn-warning form-check-label">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
