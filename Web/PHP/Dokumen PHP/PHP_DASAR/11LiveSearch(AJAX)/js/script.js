
// ambil elemen yang dibutuhkan
var keyword = document.getElementById('search');
var tombolCari = document.getElementById('tombolSearch');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function(){
    // membuat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/mahasiswa.php?keyword='+keyword.value, true);
    xhr.send();
} );