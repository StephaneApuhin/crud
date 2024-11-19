$conn = new mysqli('localhost', 'root', '', 'crud_db');
$id = $_GET['id'];
$conn->query("DELETE FROM records WHERE id=$id");
header("Location: index.php");
