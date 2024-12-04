<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran Tenant</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Formulir Pendaftaran Tenant</h2>
    <form action="page5a/tenant_inputproses.php" method="POST">
      <div class="mb-3">
        <label for="nomor_tenant" class="form-label">Nomor Tenant</label>
        <input type="text" class="form-control" id="nomor_tenant" placeholder="Masukkan Nomor Tenant" name="nomor_tenant">
      </div>
      <div class="mb-3">
        <label for="nama_tenant" class="form-label">Nama Tenant</label>
        <input type="text" class="form-control" id="nama_tenant" placeholder="Masukkan Nama Tenant" name="nama_tenant">
      </div>
      <div class="mb-3">
        <label for="jenis" class="form-label">Jenis</label>
        <select class="form-select" name="jenis">
          <option value="Makanan">Makanan</option>
          <option value="Minuman">Minuman</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="lokasi" class="form-label">Lokasi</label>
        <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi Tenant" name="lokasi">
      </div>
      <div class="mb-3">
        <label for="jam_operasional" class="form-label">Jam Operasional</label>
        <input type="text" class="form-control" id="jam_operasional" placeholder="Masukkan Jam Operasional" name="jam_operasional">
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
