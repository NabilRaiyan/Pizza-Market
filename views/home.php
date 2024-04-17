
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

        <label for="">Name: </label>
        <input type="text" name="customer_name" id="">

        <label for="">Address: </label>
        <input type="text" name="customer_address" id="">

        <label for="">Quantity: </label>
        <input type="number" name="quantity">
        
        <input type="submit" value="Place Order">
    </form>
    
</body>
</html>


<?php 

    // php code
    // bro code tutorial until logical operator

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $customer_name = $_POST["customer_name"];
    $customer_address = $_POST["customer_address"];


    $total = $price * $quantity;

    
    echo "Name: {$customer_name} <br>";
    echo "Address: {$customer_address} <br>";

    echo "{$customer_name} have orderd {$quantity} {$item}s <br>";
    echo "Your total price is \${$total}" . "<br>";

    $fruits = array("banana", "apple", "peach", "grape");

    foreach ( $fruits as $fruit){
        echo $fruit . "<br>";
    }
?>


