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
        border-collapse: collapse; 
    }
</style>
<?php
$nilai = [
    [
        "no" => 1, "nama" => "Ridho", 
        "matkul" => [
            ["nama_mk" => "Pemrograman 1", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman 1", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2, "nama" => "Ratna",
        "matkul" => [
            ["nama_mk" => "Basis Data 1", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data 1", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    [
        "no" => 3, "nama" => "Tono",
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];


foreach ($nilai as &$siswa) {
    $total_sks = 0;
    foreach ($siswa["matkul"] as $mata_kuliah) {
        $total_sks += $mata_kuliah["sks"];
    }
    $siswa["total_sks"] = $total_sks;
    $siswa["keterangan"] = ($total_sks < 7) ? "<div style='background-color: red;'>Revisi KRS</div>" : "<div style='background-color: green;'>Tidak Revisi KRS</div>";
}
unset($siswa);
?>
<body>
<table>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Mata Kuliah Diambil</td>
        <td>SKS</td>
        <td>Total SKS</td>
        <td>Keterangan</td>
    </tr>
    <?php
    
    foreach ($nilai as $siswa) { 
        foreach ($siswa["matkul"] as $index => $mata_kuliah) { 
            echo "<tr>";
            
            if ($index === 0) {
                echo "<td>" . $siswa["no"] . "</td>";
                echo "<td>" . $siswa["nama"] . "</td>";
                echo "<td>" . $mata_kuliah["nama_mk"] . "</td>";
                echo "<td>" . $mata_kuliah["sks"] . "</td>";
                echo "<td>" . $siswa["total_sks"] . "</td>";
                echo "<td>" . $siswa["keterangan"] . "</td>";
            } else {
                echo "<td></td><td></td>";
                echo "<td>" . $mata_kuliah["nama_mk"] . "</td>";
                echo "<td>" . $mata_kuliah["sks"] . "</td>";
                echo "<td></td><td></td>";
            }
            echo "</tr>";
        }
    }
    ?>
</table>
</body>
</html>
