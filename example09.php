<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Do while</title>
</head>
<body>
    <h1>Do While</h1>
    <?php

    do {
        $roll = rand(1, 6);
        echo '<p>Random number is : ' . $roll . '</p>' ;

        if ($roll == 6) {
            echo '<p>You Win!</p>';
        } else{
            echo '<p>You Lose!</p>';
        }
    } while ($roll != 6);

    ?>
</body>
</html>