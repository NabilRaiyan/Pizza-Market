
<?php 

    echo $_POST["username"];
    echo $_POST["password"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Market</title>
</head>
<body>
    <h1>Welcome to Pizza Market</h1>

    <form action="home.php" method="POST">
        <label for="">Username: </label>
        <input type="text" name="username">
        <label for="">Password:</label>
        <input type="text" name="password">

        <input type="submit" value="Log In">
    </form>
    
</body>
</html>

