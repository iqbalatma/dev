$(function() {
  $(".tombolTambahData").on("click", function() {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama").val("");
    $("#nrp").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });

  $(".tampilModalUbah").on("click", function() {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/mvc/public/mahasiswa/getubah",
      data: {
        id: id
      },
      method: "post",
      dataType: "json",
      success: function(data10) {
        console.log(data10);
        // $('#nama').val(data.nama);
        // $('#nim').val(data.nim);
        // $('#email').val(data.email);
        // $('#jurusan').val(data.jurusan);
        // $('#id').val('');
      },
      error: function(xml, error) {
        console.log(error);
      }
    });
  });
});
