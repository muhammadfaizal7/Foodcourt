<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pembeli</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Formulir Pendaftaran Pembeli</h2>
    <form action="page5a/pembeli_inputproses.php" method="POST">
      <div class="mb-3">
        <label for="nopembeli" class="form-label">Nomor Pembeli</label>
        <input type="text" class="form-control" id="nopembeli" placeholder="Masukan Nomor Pembeli" name="nopembeli">
      </div>
      <div class="mb-3">
        <label for="namapembeli" class="form-label">Nama Pembeli</label>
        <input type="text" class="form-control" id="namapembeli" placeholder="Masukan Nama Pembeli" name="namapembeli">
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="laki-laki" name="gender" value="Laki-laki">
          <label class="form-check-label" for="laki-laki">Laki-laki</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="perempuan" name="gender" value="Perempuan">
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="nohp" placeholder="Masukan Nomor Handphone" name="nohp">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Anda" name="alamat">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
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
