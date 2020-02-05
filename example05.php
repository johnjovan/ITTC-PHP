<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP If</title>
</head>
<body>
    <?php
        // If Condition 
        //
        //

        $roll = rand(1,10);
        echo "random number is : " . $roll;

        if($roll == 10){
            echo "You Win!";
        } else {
            echo "You Lost";
        }

        echo "Thank you!";
    ?>

    
</body>
</html>