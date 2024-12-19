<?php
$correct_password = "123PhP";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entered_password = $_POST['password'];

    if ($entered_password === $correct_password) {
        echo "<h3>Welcome to the protected content!</h3>";
        echo "<p>This is the secret content only accessible with the correct password.</p>";
    } else {
        echo "<p style='color:red;'>Incorrect password. Please try again.</p>";
    }
} else {
?>
    <form method="POST">
        <label for="password">Enter Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Submit">
    </form>
<?php
}
?>
