<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Data</title>
</head>
<body>
    <h1>Get Data</h1>

    <?php  

    $myname = $_GET[Name];
    $myage = $_GET[Age];
    $mybirthday = $_GET[Birthday];
    
    echo 'My name is : ' . $myname . '<br>';
    echo 'My age is : ' . $myage . '<br>';
    echo 'My birthday is : ' . $mybirthday . '<br>';

    ?>

</body>
</html>