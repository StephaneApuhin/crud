<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'crud_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$result = $conn->query("SELECT * FROM records");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>CRUD Application</h1>
        <a href="create.php" class="btn">Add Record</a>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn edit-btn">Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="btn delete-btn">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
