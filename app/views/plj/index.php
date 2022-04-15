<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahDataMk" data-toggle="modal" data-target="#formModal">
        Tambah Data Pelajaran
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/plj/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari plj.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Pelajaran</h3>
      <ul class="list-group">
        <?php foreach ($data['plj'] as $plj) : ?>
          <li class="list-group-item">
            <?= $plj['nama']; ?>
            <a href="<?= BASEURL; ?>/plj/hapus/<?= $plj['id_mk']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
            <a href="<?= BASEURL; ?>/plj/ubah/<?= $plj['id_mk']; ?>" class="badge badge-success float-right tampilModalUbahMk" data-toggle="modal" data-target="#formModal" data-id="<?= $plj['id_mk']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/plj/detail/<?= $plj['id_mk']; ?>" class="badge badge-primary float-right">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelMk">Tambah Data Pelajaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/plj/tambah" method="post">
          <input type="hidden" name="id_mk" id="id_mk">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="id_mhs">ID MHS</label>
            <input type="number" class="form-control" id="id_mhs" name="id_mhs" autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>