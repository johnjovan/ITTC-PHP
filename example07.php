<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP for</title>
</head>
<body>
    <?php

    // for($count = 1; $count <= 10; $count++ = $count + 3){
    //     echo $count . '<br>';
    // }

    for ($count=1; $count <=10; $count++){
        $roll = rand(1, 6);
        echo "<p>" . $count . " random number : " .$roll . "</p>";
         if($roll == 4 ){
             echo "<p>You Win!</p>";
         } else{
             echo "<p>You Lose!</p>";
         }
    }

    ?>
</body>
</html>