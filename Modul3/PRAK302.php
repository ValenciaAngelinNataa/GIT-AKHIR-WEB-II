<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
    <style>
        .tab {
            width:24px;
            height:24px;
        }
    </style>
</head>
<body>
    <form method="post">
        Tinggi: <input type="text" name="tinggi"><br>
        Alamat Gambar: <input type="text" name="url" value="https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png" required><br>
        <input type="submit" value="cetak"><br><br>
    </form>
<?php
if(isset($_POST['tinggi']) && isset($_POST['url'])) {
$tinggi = $_POST['tinggi'];
$url = $_POST['url'];

$a=1;
while ($a <= $tinggi){
    $b=1;
    while ($b < $a){
        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
        $b++;
    }
    $c = $tinggi;
    while ($c >= $a){
        echo "<img src= '$url' class='tab'>";
        $c--;    
    }
    echo '<br>';
    $a++;
}
}
?>
</body>
</html>