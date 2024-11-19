<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn = new mysqli('localhost', 'root', '', 'crud_db');
    $conn->query("INSERT INTO records (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Create Record</h1>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit" class="btn">Submit</button>
            <a href="index.php" class="btn back-btn">Back</a>
        </form>
    </div>
</body>
</html>
