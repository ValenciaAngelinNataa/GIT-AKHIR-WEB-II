<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
    <form method="POST">
        Jumlah Peserta: <input type="number" name="nilai" value="<?php if(isset($_POST['submit'])) echo $_POST['nilai']; ?>"></br>
        <input type="submit" name="submit" value="Cetak">
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])){
        $nilai = $_POST['nilai'];
        $i=1;
        while ($i <= $nilai){
            $warna = ($i % 2 == 0) ? 'green' : 'red';
            echo "<h2><font color='$warna'>Peserta Ke-$i</font></br>";
            $i++;
        }
    }
?>