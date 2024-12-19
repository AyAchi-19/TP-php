<?php
echo "<h3>Multiplication Table for 7</h3>";
echo "<h4>As an Unordered List</h4>";
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li>7 x $i = " . (7 * $i) . "</li>";
}
echo "</ul>";

echo "<h4>As an HTML Table</h4>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Multiplicand</th><th>Multiplier</th><th>Product</th></tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>7</td><td>$i</td><td>" . (7 * $i) . "</td></tr>";
}
echo "</table>";
?>
