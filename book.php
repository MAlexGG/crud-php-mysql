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
$sql = 'SELECT * FROM product WHERE id='.$id;
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/stylesBook.css">
    <title>Crud-exercise</title>
</head>

<body>
    <h1>Book</h1>
    <?php 
        while($row = $result->fetch_assoc()) {
    ?>
        <a href="index.php"><button>Go Back</button></a>
        <div class="ct-img">
            <img src=<?php echo $row['imagen']?> alt="<?php echo $row['name']?>">
        </div>
        <div>
            <p>Book: <?php echo $row['name']?></p>
            <p>Author: <?php echo $row['author']?></p>
            <p>Description: <?php echo $row['description']?></p>
            <p>ISBN: <?php echo $row['isbn']?></p>
        </div>
    <?php
    }
    $conn->close();
    ?>
    
    
</body>

</html>