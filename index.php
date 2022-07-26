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

// Include js
//echo "<script>alert('Connected successfully')</script>";

//Query to DB

$sql = 'SELECT * FROM product';
$result = $conn->query($sql);

//Print all
/* while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["author"]. "<br>";
}

$conn->close(); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Crud-exercise</title>
</head>

<body>
    <h1>Books</h1>
    <a href="create.php"><button>Create Book</button></a>
    <a href="search.php"><button>Search Book</button></a>
    <div class="ct-books">
        <?php 
            while($row = $result->fetch_assoc()) {
        ?>
            <div class="ct-book">
                <div class="ct-img">
                    <a href="book.php?id=<?php echo $row['id']?>"><img src= <?php echo $row['imagen']?> alt=""></a>
                </div>
                <div>
                    <p>Book: <?php echo $row['name']?> </p>
                    <p>Author: <?php echo $row['author']?> </p>
                    <a href="update.php?id=<?php echo $row['id']?>"><button>Edit</button></a>
                    <a href="delete.php?id=<?php echo $row['id']?>"><button>Delete</button></a>
                </div>
            </div>
            
        <?php
        }
        $conn->close();
        ?>
    </div>
</body>
</html>