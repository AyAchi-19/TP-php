<?php
session_start();

if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 100);
    $_SESSION['attempts_left'] = 7;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $guess = (int)$_POST['guess'];
    $_SESSION['attempts_left']--;

    if ($guess === $_SESSION['random_number']) {
        echo "<h3>Congratulations! You guessed the number!</h3>";
        session_unset();
    } elseif ($guess < $_SESSION['random_number']) {
        echo "<p>Your guess is too low. Try again!</p>";
    } else {
        echo "<p>Your guess is too high. Try again!</p>";
    }

    if ($_SESSION['attempts_left'] <= 0) {
        echo "<h3>Sorry! You've run out of attempts. The correct number was {$_SESSION['random_number']}.</h3>";
        session_unset();
    }
}
?>

<form method="POST">
    <label for="guess">Enter your guess (1-100):</label>
    <input type="number" name="guess" id="guess" min="1" max="100" required>
    <input type="hidden" name="attempts_left" value="<?php echo $_SESSION['attempts_left']; ?>">
    <input type="submit" value="Submit Guess">
</form>

<p>Attempts remaining: <?php echo $_SESSION['attempts_left']; ?></p>
