<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nb = $_POST['nb'];
    $m = $_POST['m'];
    $mode = $_POST['mode'];

    if (is_numeric($nb) && is_numeric($m) && !empty($nb) && !empty($m)) {
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
        echo "Please fill out all fields correctly (valid numbers).";
    }
} else {
    ?>
    <form action="mult5.php" method="POST">
        <label for="nb">Enter the maximal multiplicand:</label>
        <input type="number" name="nb" id="nb" required><br><br>

        <label for="m">Enter the maximal multiplier:</label>
        <input type="number" name="m" id="m" required><br><br>

        <label for="mode">Display Mode:</label>
        <select name="mode" id="mode" required>
            <option value="single">Multiplication from 0 to m times nb</option>
            <option value="range">Multiplication from 0 to m times numbers from 0 to nb</option>
        </select><br><br>

        <input type="submit" value="Generate Table">
    </form>
    <?php
}
?>
