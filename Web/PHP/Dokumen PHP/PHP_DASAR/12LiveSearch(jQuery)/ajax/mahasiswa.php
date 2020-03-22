<?php
    require '../function.php';
    $key = $_GET["keyword"];
    $query = "SELECT * FROM mahasiswa
    WHERE
    nim LIKE '%$key%' OR nama LIKE '%$key%' OR email LIKE '%$key%' OR jurusan LIKE '%$key%'";
    $mahasiswa = ambil_data($query);
    var_dump($mahasiswa);
?>

<table border="1" cellsapcing="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i=1;  ?>
        <?php foreach($mahasiswa as $rowaaa) : ?>
        <tr>
            <td><?php echo $i;?></td>
            <td>
                <a href="update.php?id=<?= $rowaaa["id"]; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $rowaaa["id"]; ?>">Hapus</a>
                <!-- kirim data id dengan metode get -->
            </td>
            <td><img src="<?= "img/".$rowaaa["gambar"]; ?>" alt=""></td>
            <td><?= $rowaaa["nim"]; ?></td>
            <td><?= $rowaaa["nama"]; ?></td>
            <td><?= $rowaaa["email"]; ?></td>
            <td><?= $rowaaa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>