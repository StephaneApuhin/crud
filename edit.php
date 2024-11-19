$conn = new mysqli('localhost', 'root', '', 'crud_db');
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM records WHERE id = $id");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE records SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Record</h1>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= $data['name'] ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $data['email'] ?>" required>
            <button type="submit" class="btn">Update</button>
            <a href="index.php" class="btn back-btn">Back</a>
        </form>
    </div>
</body>
</html>
