<?php
$jari_jari=4.2;
$tinggi=5.4;

$volume_tabung= 3.14 * pow($jari_jari,2) * $tinggi;

echo number_format($volume_tabung, 3) . " m3";
?>