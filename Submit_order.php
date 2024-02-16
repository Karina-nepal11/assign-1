<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order, <?php echo $_POST['name']; ?>!</p><br>
    <p>Your order details:</p><br>
    <ul>
        <li>Number of Pizzas: <?php echo $_POST['num_pizzas']; ?></li><br>
        <li>Size: <?php echo $_POST['Size']; ?></li><br>
        <li>Shape: <?php echo $_POST['Shape']; ?></li><br>
        <li>Toppings: <?php echo implode(', ', $_POST['Toppings']); ?></li><br>
        <li>Crust Type: <?php echo $_POST['Crust']; ?></li><br>
        <li>Delivery Option: <?php echo $_POST['Delivery']; ?></li><br>
        <li>Additional Comments: <?php echo $_POST['Comments']; ?></li><br>
    </ul>
    <p>We will contact you soon on <?php echo $_POST['phone']; ?> or <?php echo $_POST['email']; ?> for further details.</p>
</body>
</html>