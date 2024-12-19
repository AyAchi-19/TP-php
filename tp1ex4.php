<?php

$birthYear = 2004; // Change this to your birth year


$currentYear = date("Y");


function isLeapYear($year) {
    return ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));
}

$leapYears = [];


for ($year = $birthYear; $year <= $currentYear; $year++) {
    if (isLeapYear($year)) {
        $leapYears[] = $year;
    }
}


$count = count($leapYears);
if ($count > 0) {
    echo "You have experienced $count leap years: " . implode(", ", $leapYears) . ".";
} else {
    echo "You have not experienced any leap years.";
}
?>
