<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ITTC Delete Form</title>
</head>
<body>
    <?php
        $ID = $_POST['ID'];

        $pdo = new PDO('mysql:host=localhost;dbname=ittc_member', 'root', 'zxcv1234');
        $stmt = $pdo->prepare('DELETE FROM ittc_member WHERE ID = ?');
        $stmt->execute([ $ID ]);

        print_r($stmt->errorInfo());
    
    ?>

<a href="ittc_list.php">Go to List</a>

</body>
</html>