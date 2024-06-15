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
        th{
           background-color: red;
        }
    </style>
</head>
<body>
    <table border= "2.4">
        <tr>
            <th><h2>Daftar Smartphone Samsung</h2></th>
        <tr>
        <?php
        $smartphones = array (
            "Samsung Galaxy S22"=> "1", 
            "Samsung S22+"=> "2", 
            "Samsung Galaxy A03"=> "3", 
            "Samsung Galaxy Xcover 5"=> "4");

        foreach ($smartphones as $telepon => $urutan){
            echo "<tr>";
            echo "<td>$telepon</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>