<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Array</title>
</head>
<body>
<h1>Array</h1>

    <?php

    $array = ['school', 2, '100'];

    echo $array[0] . '<br>'; // school
    echo $array[1] . '<br>'; // 2
    echo $array[2] . '<br>'; // 100

    $array[1] = 3;
    echo $array[1] . '<br>';
    
    $array[2] = 'park';
    echo $array[2] . '<br>';

    $array[3] = 4;
    echo $array[3] . '<br>';

    $array[] = 5;
    echo $array[4] . '<br>';
    ?>

</body>
</html>