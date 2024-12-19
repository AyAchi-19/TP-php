<?php
function calculate($operation, $value1, $value2) {
    switch ($operation) {
        case '+':
            return $value1 + $value2;
        case '-':
            return $value1 - $value2;
        case '*':
            return $value1 * $value2;
        case '/':
            if ($value2 == 0) {
                return "Error: Division by zero.";
            }
            return $value1 / $value2;
        default:
           
    }
}
?>
