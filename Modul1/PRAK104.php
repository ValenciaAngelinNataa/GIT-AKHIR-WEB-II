<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        th, td{
            border: 1.5px solid;
            padding: 2.3px;
            text-align: left;
        }
    </style>
</head>
<body>
    <table border= "2.4">
        <tr>
            <th>Daftar Smartphone Samsung</th>
        <tr>
        <?php
        $smartphones = array ("Samsung Galaxy S22", "Samsung S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

        foreach ($smartphones as $telepon){
            echo "<tr>";
            echo "<td>$telepon</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>