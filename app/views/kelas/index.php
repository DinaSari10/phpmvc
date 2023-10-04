<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash_kelas(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal" id="formModalLabel">
                Tambah kelas
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>kelas/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari kelas..." name="keyword" id="keyword" aria-describedby="button-addon" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <h1>Daftar Kelas</h1>
    <ul class="list-group">
        <?php foreach ($data['kelas'] as $kelas) : ?>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <?= $kelas['kelas']; ?>
                <div class="d-flex gap-2">
                    <a href="<?= BASEURL; ?>kelas/detail/<?= $kelas['id'] ?>" class="badge text-bg-primary text-decoration-none float-right">detail</a>
                    <a href="<?= BASEURL; ?>kelas/ubah/<?= $kelas['id'] ?>" class="badge text-bg-success text-decoration-none float-right tampilModalUbahKelas" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $kelas['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>kelas/hapus/<?= $kelas['id'] ?>" class="badge text-bg-danger text-decoration-none float-right" onclick="return confirm('yakin?')">hapus</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
</div>


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
          <form action="<?= BASEURL; ?>/kelas/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <label for="kelas">kelas</label>
            <select class="form-control" id="kelas" name="nama">
              <option value="Rekayasa Perangkat Lunak">X</option>
              <option value="Rekayasa Perangkat Lunak">XI</option>
              <option value="Desain Komunikasi Visual">XII</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>