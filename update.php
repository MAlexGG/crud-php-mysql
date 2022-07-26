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
    <link rel="stylesheet" href="./styles/stylesForm.css">
    <title>Update Book</title>
</head>
<body>
    <?php 
        while($row = $result->fetch_assoc()) {
    ?>
    <form action="update-book.php?id=<?php echo $row['id']?>" method="post" class="ct-createForm">
        <input type="text" name="name" id="name" value="<?php echo $row['name']?>">
        <input type="text" name="author" id="author" value="<?php echo $row['author']?>">
        <input type="text" name="imagen" id="imagen" value="<?php echo $row['imagen']?>">
        <textarea type="text" name="description" id="description"><?php echo $row['description']?></textarea>
        <input type="number" name="isbn" id="isbn" value="<?php echo $row['isbn']?>">
        <div class="ct-buttons">
            <button type="submit">Update</button>
            <a href="./index.php"><button type="button">Cancel</button></a>
        </div>
    </form>    
    <?php }
    $conn->close();?>
</body>
</html>