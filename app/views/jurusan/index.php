<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal" id="formModalLabel">
        Tambah Data Jurusan
      </button>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>jurusan/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari jurusan..." name="keyword" id="keyword" aria-describedby="button-addon" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <br><br>
  <h3>Daftar Jurusan</h3>
  <ul class="list-group">
    <?php foreach ($data['jurusan'] as $jurusan) : ?>
      <li class="list-group-item d-flex flex-row justify-content-between align-items-end">
        <?= $jurusan['nama']; ?>
        <div class="d-flex justify-content-end">
          <a href="<?= BASEURL; ?>/Jurusan/detail/<?= $jurusan['id']; ?>" class="badge rounded-pill bg-primary float-right mx-1">detail</a>
          <a href="<?= BASEURL; ?>/Jurusan/ubah/<?= $jurusan['id']; ?>" class="badge rounded-pill bg-success float-right mx-1 tampilModalUbah">ubah</a>
          <a href="<?= BASEURL; ?>/Jurusan/hapus/<?= $jurusan['id']; ?>" class="badge rounded-pill bg-danger float-right mx-1" onclick="return confirm('yakin?');">hapus</a>
        </div>
      </li>
    <?php endforeach;  ?>
  </ul>

</div>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Jurusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="nama">
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Tataboga">perkantoran</option>
              <option value="Tataboga">Akutansi</option>
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