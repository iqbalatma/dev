<?php
    //parameter default, jika parameter yang dikirimkan kosong maka menggunakan parameter default
    // require 'update.php';
    function salam($waktu = "Datang", $nama = "Admin"){ 
        
        return "Selamat $waktu, $nama!";
    }

    // mengkoneksikan database
    // nama host, username mysql, password mysql, nama database
    $conn = mysqli_connect("localhost", "root", "", "belajar_php");


    function ambil_data($result){
        
        //mengambil variabel conn dari luar fungsi 
        global $conn;

        // ambil data dari table mahasiswa / query
        //parameter ada 2, string koneksi, dan query
        //berhasil atau gagalnya query tidak tampil pesan apapun
        $result1=mysqli_query($conn, $result);
        // untuk mengecek query benar atau salah
        // query yang benar akan memberikan nilai true
        // jika gagal akan memberikan nilai false
        // var_dump($result);
        // if(!$result){
        //     // mysqli_error adalah fungsi untuk mengetahui pesan error di mysql dengan parameter koneksi
        //     echo mysqli_error($conn);
        // }
        // ambil data (fetch) mahasiswa dari objek result
        // ada 4 cara
        // mysqli_fetch_row(), untuk mengambil data dari row/baris, mengembalikan array numerik.
        // mysqli_fetch_assoc(), mengambilkan data dari row, mengembalikan array associative
        // mysqli_fetch_array(), mengambilkan data dari baris/row, mengembalikan array numerik dan associative, jadi ada 2 data yang ditampung numerik dan assoc
        // mysqli_fetch_object()
        
        // wadah untuk menampung data
        $rows = [];
        // ketika row dari result masih ada, maka lakukan looping
        // $row merupakan satu baris data dari query yang ditampung dalam $result yang diambil dari fungsi fetch assoc
        while ($row = mysqli_fetch_assoc($result1)){
            // masukkan tiap baris data kedalam $rows
            // $row merupakan satu baris data berbentuk array, kemudian disimpan dalam array lagi sehingga menjadi array 2 dimensi
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah_data($data){
        global $conn;
        $nim = $data["nim"];
        $nama = $data["nama"];
        $jurusan = $data["jurusan"];
        $email = $data["email"];
        $gambar = upload();
        if(!$gambar){
            return false;
        }
        $query = "INSERT INTO mahasiswa (nim,nama,email,jurusan, gambar) VALUES 
        ('$nim', '$nama', '$email', '$jurusan', '$gambar')
        ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
        // var_dump($result);      
    }

    function upload(){
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];
        // cek apakah tidak ada gambar yang di upload
        if($error === 4){
            echo ("<script>
            alert('Upload Gambar Terlebih Dahulu');
            </script>
            ");
            return false;
        }

        // cek apakah yang di upload adalah gambar
        $extensiGambarValid = ['jpg', 'jpeg', 'png'];
        $extensiGambar = explode('.',$namaFile);
        // contoh string iqbal atma muliawan.jpeg maka explode akan menghasilkan array ['iqbal atma muliawan', 'jpeg'] jadi ekstensi gambar = $extensiGambar[1] tapi akan bermasalah jika namanya iqbal.atma.muliawan.jpeg maka akan menghasilkan ['iqbal', 'atma', 'muliawan', 'jpeg'] jika mneggunakan array[1] maka yang keluar adalah 'atma' bukan 'jpeg'
        $extensiGambar = strtolower((end($extensiGambar)));
        // fungsi end untuk mengambil array terakhir, kemudian semua extensi dijadikan huruf kecil
        // in_array digunakan apakah ada sebuah string didalam sebuah array, dengan parameter (jarum, jerami), jarum yang dicari, jerami tempat mencarinya, jika ditemukan maka hasilnya akan true
        if( !in_array($extensiGambar, $extensiGambarValid)){
            echo ("<script>
            alert('Yang anda upload bukan gambar');
            </script>
            ");
            return false;
        }

        // cek ukuran gambar
        // if($ukuranFile >1000000){
        //     echo ("<script>
        //     alert('Ukuran Gambar terlalu besar');
        //     </script>
        //     ");
        //     return false;
        // }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= ".";
        $namaFileBaru .= $extensiGambar;
        move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
        return $namaFileBaru;

    }

    function hapus_data($data){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$data'");
        return mysqli_affected_rows($conn);
    }

    function ubah_data($data){
        global $conn;
        $id = $data["id"];
        $nim = $data["nim"];
        $nama = $data["nama"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];
        $gambarLama = $data["gambarLama"];

        //cek apakah user upload gambar baru
        if($_FILES['gambar']['error']===4){
            $gambar = $gambarLama;
        }
        else{
            $gambar = $gambarLama;
        }
        $gambar = $data["gambar"];


        $query = "UPDATE mahasiswa SET nim = '$nim', nama= '$nama', email='$email', jurusan='$jurusan', gambar = '$gambar' WHERE id=$id";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function cari($key){
        
        global $conn;
        $result = "SELECT * FROM mahasiswa
        WHERE
        nim LIKE '%$key%' OR nama LIKE '%$key%' OR email LIKE '%$key%' OR jurusan LIKE '%$key%'";
        $result1=mysqli_query($conn, $result);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result1)){
            
            $rows[]=$row;
        }
        return $rows;
    }

    function registrasi($data){
        global $conn;
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data['password']);
        $password2 = mysqli_real_escape_string($conn,$data['password2']);


        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
            alert('username sudah terdaftar')
            </script>";
            return false;
        }


        if($password !== $password2){
            echo "<script>
            alert ('konfirmasi password tidak sesuai')</script>";
            return false;
        }

        // enkripsi password
        // password_hash memiliki 2 parameter yaitu password akan yang di enkripsi dan juga algoritma yang akan digunakan
        $password = password_hash($password, PASSWORD_DEFAULT);
        // var_dump($password);die;
        // tambahkan data ke database
        mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
        return mysqli_affected_rows($conn);

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FUNGSI</title>
</head>
<body>
    <h1><?php echo salam(); ?></h1>
    
</body>
</html>