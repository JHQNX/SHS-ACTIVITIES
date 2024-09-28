<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Calories</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $person_weight = 46.6;
            $actfactor_sed = 13;
            $actfactor_act = 15;
            $lifestyleS = 129;
            $lifestyleA = 470;

            $recommend_sed = $actfactor_sed * $person_weight;
            $recommend_act = $actfactor_act * $person_weight;

            if ($lifestyleS > $recommend_sed) {
                echo "<h1><center> 'S' recommends the $recommend_sed calories this person should eat each day </center></h1>";
            } elseif ($lifestyleA < $recommend_act) {
                echo "<h1><center> 'A' recommends $recommend_act calories this person should eat each day </center></h1>";
            }
        ?>
    </body>
</html>