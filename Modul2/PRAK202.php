<?php
$pesanNama = $pesanNIM= $result = $pesanJK="";
$nama = $nim = $jenisk = "";

if (isset($_POST['submit'])){
    if(empty($_POST['nama'])){
        $pesanNama = "Nama tidak boleh kosong";
    }else {
        $nama = cek_input($_POST['nama']);
    }
    if(empty($_POST['nim'])){
        $pesanNIM = "Nim tidak boleh kosong";
    }else {
        $nim = cek_input($_POST['nim']);
    }
    if(empty($_POST['jenisk'])){
        $pesanJK = "Jenis kelamin tidak boleh kosong";
    }else {
        $jenisk = cek_input($_POST['jenisk']);
    }
}

function cek_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202 - Menampilkan pesan error pada form</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?= $nama ?>"><span class="error">* <?= $pesanNama; ?></span></br>
        Nim: <input type="text" name="nim" value="<?= $nim ?>"><span class="error">* <?= $pesanNIM; ?></span></br>
        Jenis Kelamin: <span class= "error">* <?= $pesanJK;?></span></br>
        <input type="radio" name="jenisk" value="Laki-Laki" >Laki-Laki</br>
        <input type="radio" name="jenisk" value="Perempuan" >Perempuan</br>
        <input type="submit" name="submit" value="Submit">
    </form></br>
    <?php
    if(!empty($nama) && !empty($nim) && !empty($jenisk)){
        echo "<h1>Output:<br></h1>$nama <br> $nim <br> $jenisk <br>";
    }
    ?>
</body>
</html>