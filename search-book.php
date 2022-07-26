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

$search = $_POST['search'];

$sql = "SELECT * FROM product WHERE name like '%$search%'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/stylesSearch.css">
    <title>Crud-exercise</title>
</head>

<body>
    <h2>Result of "<?php echo $search ?>"</h2>
    <?php 
        while($row = $result->fetch_assoc()) {
    ?>
    <div class="ct-search">
        <div class="ct-searchImg">
            <img src="<?php echo $row['imagen']?>" alt="<?php echo $row['name']?>">
        </div>
        <div class="ct-searchTxt">
            <h3>Title: <?php echo $row['name']?></h3> 
            <p>Author: <?php echo $row['author']?></p> 
            <p>Description: <?php echo $row['description']?></p>
            <p>ISBN: <?php echo $row['isbn']?></p>
        </div>
    </div>
        
    <?php
    }
    $conn->close();
    ?>
    
    
</body>

</html>