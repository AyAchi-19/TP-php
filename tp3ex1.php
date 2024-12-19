

<?php
include 'calculate.php';

$operation = '+';
$value1 = 10;
$value2 = 5;
echo "Result of $value1 $operation $value2 = " . calculate($operation, $value1, $value2) . "<br>";

$operation = '/';
$value1 = 10;
$value2 = 0;
echo "Result of $value1 $operation $value2 = " . calculate($operation, $value1, $value2) . "<br>";

$operation = '-';
$value1 = 15;
$value2 = 5;
echo "Result of $value1 $operation $value2 = " . calculate($operation, $value1, $value2) . "<br>";

$operation = 'x';
$value1 = 10;
$value2 = 5;
echo "Result of $value1 $operation $value2 = " . calculate($operation, $value1, $value2) . "<br>";
?>
