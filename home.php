
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
        <label for="">Quantity: </label>
        <input type="number" name="quantity">
        
        <input type="submit" value="Place Order">
    </form>
    
</body>
</html>


<?php 

    // php code

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $price * $quantity;

    echo "You have orderd {$quantity} {$item}s <br>";
    echo "Your total price is \${$total}";

    
    

?>


