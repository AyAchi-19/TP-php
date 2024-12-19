<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form action="tp3ex2home2.php" method="POST">
        <label for="title">Title:</label>
        <select name="title" id="title" required>
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
        </select><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br><br>
        
        <input type="submit" value="OK">
    </form>
</body>
</html>
