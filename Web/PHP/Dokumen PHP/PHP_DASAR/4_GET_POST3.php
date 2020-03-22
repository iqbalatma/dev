
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["submit"])):?>
        <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
    <?php endif;?>
    <!-- Jika tombol submit ditekan, maka tampilkan h1 -->

    
    <form action="" method="POST">
        Masukkan Nama : 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <!-- jika action di tag form kosong maka defaultnya akan dikirim ke halaman itu sendiri -->
    
</body>
</html>