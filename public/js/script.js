$(function () {

  $('.tombolTambahData').on('click', function () {
      $('#formModalLabel').html('Tambah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.tampilModalUbah').on('click', function () {

      $('#formModalLabel').html('Ubah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah');
  });

  const id = $(this).data("id");

  $.ajax({
    url: "http://localhost/mvcphp/public/siswa/getubah",
    data: { id: id },
    method: "post",
    dataType: "json",
    success: function (data) {
      $("#nama").val(data.nama);
      $("#umur").val(data.umur);
      $("#kelas").val(data.kelas);
      $("#jurusan").val(data.jurusan);
      $("#id").val(data.id);
    },
  }); 
});


$(".tombolTambahDataKelas").on("click", function() {
  $("#formModalLabelKelas").html("Tambah Data Kelas");
  $(".modal-footer button[type=submit]").html("Tambah Data");
  $("#kelas").val("");
});


$(".tampilModalUbahKelas").on("click", function() {
  $("#formModalLabelKelas").html("Ubah Data Kelas");
  $(".modal-footer button[type=submit]").html("Ubah Data");
  $(".modal-body form").attr(
      "action",
      "http://localhost/mvcphp/public/kelas/ubah"
  );


  const id = $(this).data("id");

  $.ajax({
    url: "http://localhost/mvcphp/public/kelas/getubah",
    data: {
        id: id
    },
    method: "post",
    dataType: "json",
    success: function(data) {
        $("#kelas").val(data.kelas);
        $("#id").val(data.id);
    },
});
});


$(".tombolTambahDataJurusan").on("click", function() {
  $("#formModalLabelJurusan").html("Tambah Data Jurusan");
  $(".modal-footer button[type=submit]").html("Tambah Data");
  $("#jurusan").val("");
});

$(".tampilModalUbahJurusan").on("click", function() {
  $("#formModalLabelJurusan").html("Ubah Data Jurusan");
  $(".modal-footer button[type=submit]").html("Ubah Data");
  $(".modal-body form").attr(
      "action",
      "http://localhost/mvcphp/public/jurusan/ubah"
  );

  const id = $(this).data("id");

  $.ajax({
      url: "http://localhost/mvcphp/public/jurusan/getubah",
      data: {
          id: id
      },
      method: "post",
      dataType: "json",
      success: function(data) {
          $("#nama").val(data.nama);
          $("#deskripsi").val(data.deskripsi);
          $("#id").val(data.id);
      },
  });
});

$(".tombolTambahDataguru").on("click", function() {
  $("#formModalLabelguru").html("Tambah Data guru");
  $(".modal-footer button[type=submit]").html("Tambah Data");
  $("#guru").val("");
});

$(".tampilModalUbahguru").on("click", function() {
  $("#formModalLabelguru").html("Ubah Data guru");
  $(".modal-footer button[type=submit]").html("Ubah Data");
  $(".modal-body form").attr(
      "action",
      "http://localhost/mvcphp/public/guru/ubah"
  );

  const id = $(this).data("id");

  $.ajax({
      url: "http://localhost/mvcphp/public/guru/getubah",
      data: {
          id: id
      },
      method: "post",
      dataType: "json",
      success: function(data) {
          $("#nama").val(data.nama);
          $("#mapel").val(data.mapel);
          $("#id").val(data.id);
      },
  });
});