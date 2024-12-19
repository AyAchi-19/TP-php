<?php
if (isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    
    if (strlen($first_name) > 0 && strlen($last_name) > 0) {
        echo "Hello $first_name $last_name!";
    } else {
        echo "Error: Both fields must be filled out.";
    }
} else {
    echo "Error: Please fill out the form.";
}
?>
