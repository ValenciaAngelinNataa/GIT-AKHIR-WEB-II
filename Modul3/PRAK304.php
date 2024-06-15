<?php
$nilai = isset($_POST["nilai"]) ? $_POST["nilai"] : 0;

if (isset($_POST["kurang"])) {
    $nilai -= 1;
}

if (isset($_POST["tambah"])) {
    $nilai += 1;
}
?>

<?php 
if (empty($nilai)) : ?>
    <form method="POST">
        Jumlah bintang <input type="text" name="nilai"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
<?php endif; ?>

<?php 
if (!empty($nilai)) : ?>
    <p>Jumlah bintang <?= $nilai ?></p>
    <?php
    $a = 1;
    while ($a <= $nilai) {
        echo " <img src='star.png' width='60' height='60'/> ";
        $a++;
    }
?>
    <form method="POST">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
        <input type="hidden" name="nilai" value="<?= $nilai ?>">
    </form>
<?php endif; ?>
</body>
</html>