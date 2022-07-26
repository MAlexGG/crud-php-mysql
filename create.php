<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/stylesForm.css">
    <title>Create Book</title>
</head>
<body>
    <form action="create-book.php" method="post" class="ct-createForm">
        <input type="text" name="name" placeholder="name of the book">
        <input type="text" name="author" placeholder="author of the book" id="author">
        <input type="text" name="imagen" placeholder="imagen of the book">
        <textarea type="text" name="description" placeholder="description of the book"></textarea>
        <input type="number" name="isbn" placeholder="ISBN of the book">
        <button type="submit">Create</button>
    </form>    
</body>
</html>