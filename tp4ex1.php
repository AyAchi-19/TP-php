<?php
$personnes = array(
    'p1' => array('firstname' => 'Abdallah', 'lastname' => 'Med', 'age' => 25, 'ville' => 'Sousse'),
    'p2' => array('firstname' => 'Ali', 'lastname' => 'Mahmoud', 'age' => 20, 'ville' => 'Tunis'),
    'p3' => array('firstname' => 'Abdallah', 'lastname' => 'Ben', 'age' => 33, 'ville' => 'Ariana'),
    'p4' => array('firstname' => 'Omar', 'lastname' => 'Salah', 'age' => 46, 'ville' => 'Sfax'),
    'p5' => array('firstname' => 'Zayd', 'lastname' => 'Med', 'age' => 7, 'ville' => 'Tunis')
);

$pseudo = isset($_GET['pseudo']) ? $_GET['pseudo'] : null;

if ($pseudo && isset($personnes[$pseudo])) {
    $person = $personnes[$pseudo];
    echo "Pseudonym: $pseudo<br>";
    echo "First Name: " . $person['firstname'] . "<br>";
    echo "Last Name: " . $person['lastname'] . "<br>";
    echo "Age: " . $person['age'] . "<br>";
    echo "City: " . $person['ville'] . "<br>";
} else {
    echo "Sorry, your pseudonym is not in the list.";
}
if ($pseudo && isset($personnes[$pseudo])) {
    // Display the person's information
} else {
    echo "Sorry, your pseudonym is not in the list.";
}


?>

<form method="POST">
    <h3>Add a New Person</h3>
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" required><br><br>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname" required><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age" id="age" required><br><br>

    <label for="ville">City:</label>
    <input type="text" name="ville" id="ville" required><br><br>

    <input type="submit" value="Add Person">
</form>

<form method="POST">
    <label for="pseudo">Enter pseudonym:</label>
    <input type="text" name="pseudo" id="pseudo" value="<?php echo htmlspecialchars($pseudo ?? ''); ?>" required><br>
    <input type="submit" value="Search">
</form>