<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
</head>
<body>
    <form method="post">
        Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"><br>
        Dari : <br>
        <input type="radio" name="dari" value="celcius" <?php if (isset($_POST["dari"]) && $_POST["dari"] == "celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="dari" value="fahrenheit" <?php if (isset($_POST["dari"]) && $_POST["dari"] == "fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="dari" value="reamur" <?php if (isset($_POST["dari"]) && $_POST["dari"] == "reamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="dari" value="kelvin" <?php if (isset($_POST["dari"]) && $_POST["dari"] == "kelvin") echo "checked";?>>Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="celcius" <?php if (isset($_POST["ke"]) && $_POST["ke"] == "celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="ke" value="fahrenheit" <?php if (isset($_POST["ke"]) && $_POST["ke"] == "fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="ke" value="reamur" <?php if (isset($_POST["ke"]) && $_POST["ke"] == "reamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="ke" value="kelvin" <?php if (isset($_POST["ke"]) && $_POST["ke"] == "kelvin") echo "checked";?>>Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>
    <?php
        if (isset($_POST["konversi"])) {
            if (!empty($_POST["dari"]) && !empty($_POST["ke"])) {
                $nilai = $_POST["nilai"];

                $result = "";

                switch ($_POST["dari"]) {
                    case "celcius":
                        switch ($_POST["ke"]) {
                            case "celcius":
                                $result = $nilai . "&deg;C";
                                break;
                            case "fahrenheit":
                                $result = (9/5 * $nilai) + 32 . "&deg;F";
                                break;
                            case "reamur":
                                $result = 4/5 * $nilai . "&deg;R";
                                break;
                            case "kelvin":
                                $result = $nilai + 273 . "&deg;K";
                                break;
                        }
                        break;
                    case "fahrenheit":
                        switch ($_POST["ke"]) {
                            case "celcius":
                                $result = 5/9 * ($nilai - 32) . "&deg;C";
                                break;
                            case "fahrenheit":
                                $result = $nilai . "&deg;F";
                                break;
                            case "reamur":
                                $result = 4/9 * ($nilai - 32) . "&deg;R";
                                break;
                            case "kelvin":
                                $result = 5/9 * ($nilai - 32) + 273 . "&deg;K";
                                break;
                        }
                        break;
                    case "reamur":
                        switch ($_POST["ke"]) {
                            case "celcius":
                                $result = 5/4 * $nilai . "&deg;C";
                                break;
                            case "fahrenheit":
                                $result = (9/4 * $nilai) + 32 . "&deg;F";
                                break;
                            case "reamur":
                                $result = $nilai . "&deg;R";
                                break;
                            case "kelvin":
                                $result = 5/4 * $nilai + 273 . "&deg;K";
                                break;
                        }
                        break;
                    case "kelvin":
                        switch ($_POST["ke"]) {
                            case "celcius":
                                $result = $nilai - 273 . "&deg;C";
                                break;
                            case "fahrenheit":
                                $result = 9/5 * ($nilai - 273) + 32 . "&deg;F";
                                break;
                            case "reamur":
                                $result = 4/5 * ($nilai - 273) . "&deg;R";
                                break;
                            case "kelvin":
                                $result = $nilai . "&deg;K";
                                break;
                        }
                        break;
                }

                if (!empty($result)) {
                    echo "<h1>Hasil Konversi: $result</h1>";
                } else {
                    echo "<h1>Masukkan unit suhu yang valid untuk konversi.</h1>";
                }
            }
        }
    ?>
</body>
</html>
