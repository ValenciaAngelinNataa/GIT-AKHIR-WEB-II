<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    table, tr, td, th {
        border: 1px solid black; 
        text-align: center;
        padding: 10px;
        border-collapse: collapse; 
    }
</style>
<body>
<?php
$nilai = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
];

for ($i = 0; $i < count($nilai); $i++) { 
    $nilai[$i]["akhir"] = $nilai[$i]["uts"] * 0.4 + $nilai[$i]["uas"] * 0.6;
    if ($nilai[$i]["akhir"] >= 80) {
        $nilai[$i]["huruf"] = "A";
    } elseif ($nilai[$i]["akhir"] > 70) {
        $nilai[$i]["huruf"] = "B";
    } elseif ($nilai[$i]["akhir"] > 60) {
        $nilai[$i]["huruf"] = "C";
    } elseif ($nilai[$i]["akhir"] > 50) {
        $nilai[$i]["huruf"] = "D";
    } else {
        $nilai[$i]["huruf"] = "E";
    }
}
?>

<table>
    <tr style="background-color: #D3D3D3; font-weight: bold;">
        <td>Nama</td>
        <td>NIM</td>
        <td>Nilai UTS</td>
        <td>Nilai UAS</td>
        <td>Nilai Akhir</td>
        <td>Huruf</td>
    </tr>
    <?php
    for ($i = 0; $i < count($nilai); $i++) { 
        echo "<tr>";
        echo "<td>" . $nilai[$i]["nama"] . "</td>";
        echo "<td>" . $nilai[$i]["nim"] . "</td>";
        echo "<td>" . $nilai[$i]["uts"] . "</td>";
        echo "<td>" . $nilai[$i]["uas"] . "</td>";
        echo "<td>" . $nilai[$i]["akhir"] . "</td>";
        echo "<td>" . $nilai[$i]["huruf"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
