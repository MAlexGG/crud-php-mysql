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

//Data from POST
$name = $_POST['name'];
$author = $_POST['author'];
$imagen = $_POST['imagen'];
$description = $_POST['description'];
$isbn = $_POST['isbn'];
$id = $_GET['id'];

//Query to DB
$sql = "UPDATE `product` SET `name`='$name',`author`='$author',`imagen`='$imagen',`description`='$description',`isbn`='$isbn' WHERE `id`=".$id;
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Book updated successfully";
    ?> 
    <a href="index.php"><button>Regresar</button></a>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

//$conn->close(); 

?>
