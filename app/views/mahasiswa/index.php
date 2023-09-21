<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
</div>
        <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal" id="formModalLabel">
         Tambah Data Mahasiswa
        </button>
        <br><br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs ) : ?>
              <li class="list-group-item d-flex flex-row justify-content-between align-items-end">
                <?= $mhs['nama']; ?>
                <div class="d-flex justify-content-end">
                  <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class ="badge rounded-pill bg-primary float-right mx-1">detail</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class ="badge rounded-pill bg-success float-right mx-1 tampilModalUbah">ubah</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge rounded-pill bg-danger float-right mx-1"onclick="return confirm('yakin?');">hapus</a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>

  <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="number" class="form-control" id="nrp" name="nrp" >
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" >
  </div>

  <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
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