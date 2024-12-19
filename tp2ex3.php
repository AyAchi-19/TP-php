<?php
$mois = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 
              'September', 'October', 'November', 'December');
$couleur = array('blue', 'white', 'red', 'yellow', 'grey', 'lime', 'lightblue', 'fuchsia', 
                 'lightgrey', 'olive', 'pink', 'green');

echo "<h3>Months:</h3>";
echo "<ul>";
foreach ($mois as $month) {
    echo "<li>$month</li>";
}
echo "</ul>";

echo "<h3>Colors:</h3>";
echo "<ul>";
foreach ($couleur as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
?>
