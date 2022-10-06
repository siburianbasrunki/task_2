<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Detail</title>

</head>

<body>

    <?php
    if (isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $nim = $_GET['nim'];
        $prodi = $_GET['pStudi'];
    }
    ?>
    <div class="container_card">
        <h3 class="title">Kartu Tanda Mahasiswa</h3>
        <div class="card">
            <div class="image_card">
                <img src="profile.jpg" alt="card" width="200" height="200">
            </div>
            <div class="description_card">
                <small>Nama </small>
                <h3><?php echo $nama ?></h3>
                <small>NIM</small>
                <h3><?php echo $nim ?></h3>
                <small>Program Studi </small>
                <h3><?php echo $prodi ?></p>
            </div>
        </div>
    </div>



</body>

</html>