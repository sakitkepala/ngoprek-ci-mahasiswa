<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          Isi Data Mahasiswa
        </div>

        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim">
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option selected>Buka menu seleksi</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="DKV">DKV</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>

            <button type="submit" class="btn btn-primary float-right" name="tambah">Simpan Data</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>