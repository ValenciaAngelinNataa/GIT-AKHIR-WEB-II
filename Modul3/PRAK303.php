<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>
<body>
    <form method="post">
        Batas Bawah: <input type="text" name="bawah"><br>
        Batas Atas: <input type="text" name="atas"><br>
        <input type="submit" value="cetak" name="hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])){
        $under=$_POST['bawah'];
        $top=$_POST['atas'];
        while ($under <= $top) {
            if (($under + 7) % 5 == 0){
                echo "<img src='star.png' alt='*' width='20px'>";
            } else {
                echo "$under ";
            }
            $under++;
        }
    }
    ?>
</body>
</html>