<?php
    $lumber_ec = 150000;
    $concreate_ec = 78000;
    $drywall_ec = 69000;
    $paint_ec = 12000;
    $miscellaneous_ec = 20000;

    function computeSum($expenditure1, $increase, $expenditure2) {
        return $expenditure1 * $increase + $expenditure2;
    }

    function calculateSum($total1, $total2, $total3, $total4, $total5) {
        return $total1 + $total2 + $total3 + $total4 + $total5;
    }
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <title> Commission Report </title>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1>
    <style>
        body {
            font-family: arial;
            background-color: #C7C4B1;
        }

        th {
            color: white;
        }
    </style>
</head>
<body>
    <h1><center> Public Library Expansion Project </center></h1>
    <h2><center> Cost Estimates </center></h2>
    <table border="0" width="1333" align="center">
        <tr bgcolor="black">
            <th><h3> Expenditures </h3></th>
            <th><h3> Estimated Cost </h3></th>
            <th><h3> 10% Increase </h3></th>
            <th><h3> 15% Increase </h3></th>
            <th><h3> 20% Increase </h3></th>
        </tr>
        <tr align="center" bgcolor="#D1E2C4">
            <td> Lumber </td>
            <td>$ <?php echo number_format($lumber_ec,2); ?></td>
            <td>$ <?php echo number_format(computeSum(150000, 0.10, 150000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(150000, 0.15, 150000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(150000, 0.20, 150000),2); ?></td>
        </tr>
        <tr align="center" bgcolor="#D1E2C4">
            <td> Concrete </td>
            <td>$ <?php echo number_format($concreate_ec,2);?></td>
            <td>$ <?php echo number_format(computeSum(78000, 0.10, 78000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(78000, 0.15, 78000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(78000, 0.20, 78000),2); ?></td>
        </tr>
        <tr align="center" bgcolor="#D1E2C4">
            <td> Drywall </td>
            <td>$ <?php echo number_format($drywall_ec,2);?></td>
            <td>$ <?php echo number_format(computeSum(69000, 0.10, 69000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(69000, 0.15, 69000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(69000, 0.20, 69000),2); ?></td>
        </tr>
        <tr align="center" bgcolor="#D1E2C4">
            <td> Paint </td>
            <td>$ <?php echo number_format($paint_ec,2);?></td>
            <td>$ <?php echo number_format(computeSum(12000, 0.10, 12000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(12000, 0.15, 12000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(12000, 0.20, 12000),2); ?></td>
        </tr>
        <tr align="center" bgcolor="#D1E2C4">
            <td> Miscellaneous </td>
            <td>$ <?php echo number_format($miscellaneous_ec,2);?></td>
            <td>$ <?php echo number_format(computeSum(20000, 0.10, 20000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(20000, 0.15, 20000),2); ?></td>
            <td>$ <?php echo number_format(computeSum(20000, 0.20, 20000),2); ?></td>
        </tr>
        <tr align="center" bgcolor="black">
            <th><h3> Total Expenditures: </h3></th>
            <th><h3>$ <?php echo number_format(calculateSum($lumber_ec, $concreate_ec, $drywall_ec, $paint_ec, $miscellaneous_ec),2); ?></h3></th>
            <th><h3>$ <?php echo number_format(calculateSum(computeSum(150000, 0.10, 150000), computeSum(78000, 0.10, 78000), computeSum(69000, 0.10, 69000), computeSum(12000, 0.10, 12000), computeSum(20000, 0.10, 20000)),2) ?></h3></th>
            <th><h3>$ <?php echo number_format(calculateSum(computeSum(150000, 0.15, 150000), computeSum(78000, 0.15, 78000), computeSum(69000, 0.15, 69000), computeSum(12000, 0.15, 12000), computeSum(20000, 0.15, 20000)),2) ?></h3></th>
            <th><h3>$ <?php echo number_format(calculateSum(computeSum(150000, 0.20, 150000), computeSum(78000, 0.20, 78000), computeSum(69000, 0.20, 69000), computeSum(12000, 0.20, 12000), computeSum(20000, 0.20, 20000)),2) ?></h3></th>
        </tr>
        <tr>
            <td colspan="5" align="right"><h3> Created by: John Lord A. Galleto </h3></td>
        </tr>
    </table>
</body>
</html>