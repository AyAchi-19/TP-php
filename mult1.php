<?php
if (isset($_POST['nb'])) {
    $nb = $_POST['nb'];
    if (is_numeric($nb)) {
        echo "<h3>Multiplication Table for $nb</h3>";
        for ($i = 0; $i <= 10; $i++) {
            echo "$nb x $i = " . ($nb * $i) . "<br>";
        }
    } else {
        echo "Please enter a valid number.";
    }
} else {
    echo "Please enter a multiplicand.";
}
?>
