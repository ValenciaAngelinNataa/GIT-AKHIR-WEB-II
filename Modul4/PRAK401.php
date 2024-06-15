<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 5%;
        }
        td, th {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label for="rows">Panjang:</label>
        <input type="number" id="rows" name="rows" required value="<?php echo isset($_POST['rows']) ? $_POST['rows'] : ''; ?>"><br>
        <label for="cols">Lebar:</label>
        <input type="number" id="cols" name="cols" required value="<?php echo isset($_POST['cols']) ? $_POST['cols'] : ''; ?>"><br>
        <label for="values">Nilai:</label>
        <input type="text" id="values" name="values" required value="<?php echo isset($_POST['values']) ? $_POST['values'] : ''; ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST["cetak"])) {
        $values = explode(" ", $_POST["values"]);
        $valueCount = count($values);
        $rows = $_POST["rows"];
        $cols = $_POST["cols"];

        if ($rows * $cols == $valueCount) {
            $index = 0;
            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $cols; $j++) {
                    $matrix[$i][$j] = $values[$index];
                    $index++;
                }
            }

            echo "<table>";
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    echo "<td>" . $matrix[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Jumlah nilai tidak sesuai dengan ukuran matriks.";
        }
    }
    ?>
</body>
</html>
