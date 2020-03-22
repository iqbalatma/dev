$(document).ready(function(){
    // hilangkan tombol cari
    $('#tombolSearch').hide();
    $('#search').on('keyup', function(){
        // munculkan icon loading
        $('.loader').show();


        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#search').val());

        // $.get()
        // $.get('ajax/mahasiswa.php?keyword=?' + $('#search').val(), function(){
        //     $('#container').html(data);
        // });
    });
});