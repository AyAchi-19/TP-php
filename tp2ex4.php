<?php
$mois = array(
    array("January", 31, "Winter"),
    array("February", 28, "Winter"),
    array("March", 31, "Spring"),
    array("April", 30, "Spring"),
    array("May", 31, "Spring"),
    array("June", 30, "Summer"),
    array("July", 31, "Summer"),
    array("August", 31, "Summer"),
    array("September", 30, "Fall"),
    array("October", 31, "Fall"),
    array("November", 30, "Fall"),
    array("December", 31, "Winter")
);

foreach ($mois as $month) {
    echo "The month of $month[0] has $month[1] days, corresponding season: $month[2]<br>";
}
?>
