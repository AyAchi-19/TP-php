<?php
if (isset($_POST['nb']) && isset($_POST['m']) && isset($_POST['mode'])) {
    $nb = $_POST['nb'];
    $m = $_POST['m'];
    $mode = $_POST['mode'];

    if (is_numeric($nb) && is_numeric($m)) {
        if ($mode == 'single') {
            echo "<h3>Multiplication Table for $nb (0 to $m)</h3>";
            for ($i = 0; $i <= $m; $i++) {
                echo "$nb x $i = " . ($nb * $i) . "<br>";
            }
        } elseif ($mode == 'range') {
            echo "<h3>Multiplication Table (0 to $nb and 0 to $m)</h3>";
            for ($i = 0; $i <= $nb; $i++) {
                echo "<b>Multiples of $i:</b><br>";
                for ($j = 0; $j <= $m; $j++) {
                    echo "$i x $j = " . ($i * $j) . "<br>";
                }
                echo "<br>";
            }
        }
    } else {
        echo "Please enter valid numbers for the multiplicand and multiplier.";
    }
} else {
    echo "Please fill out all the fields.";
}
?>
