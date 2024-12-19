<?php
if (isset($_POST['title']) && isset($_POST['last_name'])) {
    $title = $_POST['title'];
    $last_name = $_POST['last_name'];

    if (strlen($last_name) > 0) {
        echo "Hello $title $last_name!";
    } else {
        echo "Error: Last name is required.";
    }
} else {
    echo "Error: Please fill out the form.";
}
?>
