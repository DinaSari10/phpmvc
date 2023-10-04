<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash_guru(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal" id="formModalLabel">
                Tambah Guru
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/guru/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari guru..." name="keyword" id="keyword" aria-describedby="button-addon" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <h1>Daftar guru</h1>
    <ul class="list-group">
        <?php foreach ($data['guru'] as $guru) : ?>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <?= $guru['guru']; ?>
                <div class="d-flex gap-2">
                    <a href="<?= BASEURL; ?>guru/detail/<?= $guru['id'] ?>" class="badge text-bg-primary text-decoration-none float-right">detail</a>
                    <a href="<?= BASEURL; ?>guru/ubah/<?= $guru['id'] ?>" class="badge text-bg-success text-decoration-none float-right tampilModalUbahguru" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $guru['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>guru/hapus/<?= $guru['id'] ?>" class="badge text-bg-danger text-decoration-none float-right" onclick="return confirm('yakin?')">hapus</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
</div>

<!-- Modal -->
<!-- ... Bagian HTML lainnya ... -->

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <form action="<?= BASEURL; ?>/guru/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Guru </label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Mapel </label>
                    <input type="text" class="form-control" id="mapel" name="mapel">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah guru</button>
            </form>
        </div>
      </div>
    </div>
  </div>
    