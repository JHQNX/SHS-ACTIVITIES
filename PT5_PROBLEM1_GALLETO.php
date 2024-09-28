<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .glass {
            background-color: #FFA500;
            border-radius: 20px;
            box-shadow: 0px 0px 20px 0px rgba(255,255,255,0.3), 
                        0px 0px 40px 0px rgba(255,255,255,0.3), 
                        0px 0px 60px 0px rgba(255,255,255,0.3), 
                        inset 0px 0px 20px 0px rgba(255,255,255,0.3);
            padding: 20px;
            margin: 50px auto;
            max-width: 500px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="glass">
        <?php
            $n = 1;
            $sum = 0;

            do{
                $sum = $sum + (1.0/$n);
                echo "Sum is $sum <br>"; 
                $n++;
            }while ($n <= 4);
        ?>
    </div>
</body>
</html>