<!DOCTYPE html>
<html lang="en">
<head>
    <title> Investment </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Roboto, sans-serif;
            background-color: #E5E4E2;
        }
    </style>
</head>
<body>
    <h2> Investment </h2>
    <?php

    // inital investment 100
    // annual compound interest is 5% divided 100 = 0.05
    // year 10
    // result is 105 after a year
    // The next year, the initial investment earns 5% of $105, or $5.25, making it $110.25 and so on
    // sum = annual interest * initial investment + initial investment

    $initial_investment = 100;
    $interest = 5 / 100;
    $year = 10;
    $yyear = 1;
    $interest_grow = 5;

    echo "<b> Initial investment: $100.00</b><br>";
    echo "<b> Annual Compound Interest (in percent): 5% </b><br><br>";

    do {
        echo '<b> year '.$yyear.'</b>:'.($initial_investment + $interest_grow).'<br>';
        $interest_grow = $interest_grow + (($initial_investment + $interest_grow) * $interest);
        $yyear++;
    } while ($yyear <= $year);
    
    ?>
</body>
</html>