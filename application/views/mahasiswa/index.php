<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <a class="btn btn-primary" href="<?=base_url();?>mahasiswa/tambah">Tambahkan Mahasiswa</a>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ( $daftar_mahasiswa as $mahasiswa ): ?>
        <li class="list-group-item"><?= $mahasiswa['nama']; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>