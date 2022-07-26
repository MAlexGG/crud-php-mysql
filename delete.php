<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_exercise";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM product WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Book deleted successfully";
  ?> 
    <a href="index.php"><button>Regresar</button></a>
  <?php
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 