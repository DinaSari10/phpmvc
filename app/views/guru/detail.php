<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body text-center">
            <h5 class="card-title">Nama Guru: <?= $data['guru']['nama']; ?></h5>
            <p class="card-text">Mapel: <?= $data['guru']['mapel']; ?></p>
            <a href="<?= BASEURL; ?>/jurusan" class="card-link">Kembali</a>
        </div>
    </div>
</div>