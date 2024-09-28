<?php

    if( isset($_POST['cafe']) && isset($_POST['quantity']) && isset($_POST['inout']) ) {

        $cafes = array(
            "Cappucino" => 2.00,
            "Espresso" => 2.75,
            "Latte" => 1.75,
            "Iced Cappuccino" => 2.50,
            "Iced Latte" => 2.50
        );

        $cafe = $_POST['cafe'];
        $quantity = $_POST['quantity'];
        $inout = $_POST['inout'];
        
        function calculateSum($cafe, $quantity) {
            return $cafe * $quantity;
        }

        function computeSum($sum) {
            return $sum + 0.12;
        }

        $selected_cafe = $cafes[$_POST['cafe']];
        $total_amount = calculateSum($selected_cafe,$quantity);

        if( $inout == 'take out'){
            $total_amount = computeSum($total_amount);
        }
    }
    
?>      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #E5E4E2;
            font-family: Roboto, sans-serif;
        }
        button {
            background-color: #555;
            color: #fff;
        }
    </style>
</head>
<body>
    <form method="POST">
    <table width="40%" cellpadding="3px" align="center">
        <thead>
            <tr>
                <th><h3> Item </h3><hr></th>
                <th><h3> Price </h3><hr></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="radio" name="cafe" value="Cappucino" required> Cappucino </td>
                <td align="center"> $2.00 </td>
            </tr>
            <tr>
                <td> <input type="radio" name="cafe" value="Espresso" required> Espresso </td>
                <td align="center"> $2.75 </td>
            </tr>
            <tr>
                <td> <input type="radio" name="cafe" value="Latte" required> Latte </td>
                <td align="center"> $1.75 </td>
            </tr>
            <tr>
                <td> <input type="radio" name="cafe" value="Iced Cappuccino" required> Iced Cappuccino </td>
                <td align="center"> $2.50 </td>
            </tr>
            <tr>
                <td> <input type="radio" name="cafe" value="Iced Latte" required> Iced Latte </td>
                <td align="center"> $2.50 </td>
            </tr>
            <tr>
                <td align="right" colspan="2"> Enter the Quantity: <input type="text" name="quantity" id="quantity" required> </td>
            </tr>
            <tr>
                <td align="right" colspan="2"> Would you like to dine in or take out your order: <input type="radio" name="inout" value="dine in" required>Dine in <input type="radio" value="take out" name="inout" require>Take out </td>
            </tr>
            <tr>
                <td colspan="2"> <hr> </td>
            </tr>
            <tr>
                <td align="center" colspan="2"> <button type="submit" name="submit"> Submit Order </button> </td>
            </tr>
        </tbody>
    </table>
    </form>
    <?php if( isset($_POST['cafe']) && isset($_POST['quantity']) && isset($_POST['inout']) ) { ?>
    <br>
    <center>
    <h4> Total Amount Due: $<?php echo number_format($total_amount,2); ?></h4>
    <br>
    <h4> Thank You for Ordering </h4>
    <h4> Come Again </h4>
    <h4> (˵╹⌣╹˵) </h4>
    </center>
    <?php } ?>
</body>
</html>