<form method="POST">
<input type="text" name="input">
        <button type="text" name="submit">Submit</button>
</form>
<?php
    if (isset($_POST["submit"])) {
        $input = $_POST["input"];
        $nilai = strlen($input);
        echo "<h2> Input: </h2> $input <br> <h2> Output: </h2>";
        $a = 0;
        while ($a < $nilai) {
            $b = $nilai;
            while ($b > 0) {
                if ($b == $nilai) {
                    echo strtoupper($input[$a]);
                } else {
                    echo strtolower($input[$a]);
                }
                $b--;
            }
            $a++;
        }
    }
?>