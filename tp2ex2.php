<?php
$semaine = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

// Traverse with while loop
$i = 0;
while ($i < count($semaine)) {
    echo $semaine[$i] . "<br>";
    $i++;
}

// Traverse with foreach loop
foreach ($semaine as $jour) {
    echo $jour . "<br>";
}

// Display days with even indices
for ($i = 0; $i < count($semaine); $i += 2) {
    echo $semaine[$i] . "<br>";
}

// Create HTML table
echo "<table border='1'><tr>";
foreach ($semaine as $jour) {
    echo "<th>$jour</th>";
}
echo "</tr><tr>";
foreach ($semaine as $jour) {
    echo "<td>$jour</td>";
}
echo "</tr></table>";

// Create HTML select dropdown
echo "<select>";
foreach ($semaine as $jour) {
    echo "<option value='$jour'>$jour</option>";
}
echo "</select>";

// Create associative array for workload
$workload = [
    "Monday" => 8,
    "Tuesday" => 7,
    "Wednesday" => 6,
    "Thursday" => 5,
    "Friday" => 4,
    "Saturday" => 3,
    "Sunday" => 2
];

foreach ($workload as $jour => $heure) {
    echo "$jour: $heure hours<br>";
}

// Create multidimensional array for schedule
$schedule = [
    "Monday" => ["S1" => "subject1", "S2" => "subject2", "S4" => "subject3"],
    "Tuesday" => ["S2" => "subject2", "S3" => "subject1", "S5" => "subject3", "S6" => "subject4"],
    "Wednesday" => ["S1" => "subject1", "S2" => "subject2", "S4" => "subject3"],
    "Thursday" => ["S3" => "subject1", "S5" => "subject3"],
    "Friday" => ["S2" => "subject2", "S6" => "subject4"],
    "Saturday" => ["S1" => "subject1", "S4" => "subject3"],
    "Sunday" => ["S2" => "subject2"]
];

foreach ($schedule as $day => $subjects) {
    echo "$day: ";
    foreach ($subjects as $code => $subject) {
        echo "$code: $subject, ";
    }
    echo "<br>";
}
?>
