<?php
    //parameter default, jika parameter yang dikirimkan kosong maka menggunakan parameter default
    // require 'update.php';
    function salam($waktu = "Datang", $nama = "Admin"){
        
        return "Selamat $waktu, $nama!";
    }

    // mengkoneksikan database
    // nama host, username mysql, password mysql, nama database
    $conn = mysqli_connect("localhost", "root", "", "belajar_php");


    function ambil_data(){
        
        //mengambil variabel conn dari luar fungsi 
        global $conn;

        // ambil data dari table mahasiswa / query
        //parameter ada 2, string koneksi, dan query
        //berhasil atau gagalnya query tidak tampil pesan apapun
        $result=mysqli_query($conn, "SELECT * FROM mahasiswa");
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
        while ($row = mysqli_fetch_assoc($result)){
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
        $query = "INSERT INTO mahasiswa (nim,nama,email,jurusan) VALUES 
        ('$nim', '$nama', '$email', '$jurusan')
        ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
        // var_dump($result);      
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

        $query = "UPDATE mahasiswa SET nim = '$nim', nama= '$nama', email='$email', jurusan='$jurusan' WHERE id=$id";
        mysqli_query($conn,$query);
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