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

//Query to DB
$sql = "INSERT INTO product (name, author, imagen, description, isbn)
VALUES ('$name','$author','$imagen','$description','$isbn')";

if ($conn->query($sql) === TRUE) {
    echo "New book created successfully";
    ?> 
    <a href="index.php"><button>Regresar</button></a>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close(); 

?>