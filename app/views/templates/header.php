<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman
        <?= $data['judul'] ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/Mahasiswa">Mahasiswa</a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/Jurusan">Jurusan</a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/kelas">Kelas</a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/guru">Guru</a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
      
    </div>
  </div>
  </div>
</nav>