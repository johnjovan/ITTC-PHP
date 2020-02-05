<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Array 02</title>
</head>
<body>
    <h1>Array</h1>

    <?php

    $numbers = [];

    $numbers[1] = "one";
    $numbers[2] = "two";
    $numbers[3] = "three";
    $numbers[4] = "four";
    $numbers[5] = "five";
    $numbers[6] = "six";

    echo $numbers[3] . '<br>';
    echo $numbers[5] . '<br><hr>';

    $var1 = 3;
    $var2 = 5;

    echo $numbers[$var1] . '<br>';
    echo $numbers[$var2] . '<br><hr>';

    $phil = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six'
    ];
    $roll = rand(1, 6);
    echo '<p> Random Number is : ' . $phil[$roll] . '</p>';

    if($roll == 6){
        echo '<p>You Win!</p>';
    } else{
        echo '<p>You Lose!</p> <hr>';
    }

    $birthdays['jovan'] = '25-sep-1995';
    $birthdays['jeremy'] = '21-jan-2020';
    $birthdays['anna'] = '30-jan-2019';
    echo 'jovan birthdays : ' . $birthdays['jovan'] . '<br>';
    
    $birthdays = [
        'john' => '25-sep-1995',
        'jovan' => '21-jan-2000',
        'sisneros' => '22-feb-2003'
    ];
    echo 'john birthdays : ' . $birthdays['john'];


    ?>

</body>
</html>