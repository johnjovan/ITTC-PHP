<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ITTC View</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <?php

        $ID = $_GET['ID'];

        $pdo = new PDO('mysql:host=localhost;dbname=ittc_member', 'root', 'zxcv1234');
        $stmt = $pdo->prepare('SELECT * FROM ittc_member WHERE ID = ?');
        $stmt->execute([ $ID ]);
        $item = $stmt->fetch();

        echo 'Name : ' . $item['Name'];
        echo '<img src="'.$item['Image'].'" alt="" style="width: 100px;"><br><br>';
        echo 'Number : ' . $item['Number'] . '<br><br>';
        echo 'Address : ' . $item['Address'] . '<br><br>';
        echo 'Birthday : ' . $item['Birthday'] . '<br><br>';
        echo 'Age : ' . $item['Age'] . '<br><br>';
        echo 'Gender : ' . $item['Gender'] . '<br><br>';
        echo 'Height : ' . $item['Height'] . '<br><br>';
        echo 'Weight : ' . $item['Weight'] . '<br><br>';
        echo 'Status : ' . $item['Status'] . '<br><br>';
        echo 'Spouse : ' . $item['Spouse'] . '<br><br>';
        echo 'Children : ' . $item['Children'] . '<br><br>';
        echo 'Pastor : ' . $item['Pastor'] . '<br><br>';
        echo 'Elementary : ' . $item['Elementary'] . '<br><br>';
        echo 'Year1 : ' . $item['Year1'] . '<br><br>';
        echo 'HS : ' . $item['HS'] . '<br><br>';
        echo 'Year2 : ' . $item['Year2'] . '<br><br>';
        echo 'College : ' . $item['College'] . '<br><br>';
        echo 'Year3 : ' . $item['Year3'] . '<br><br>';
        echo 'Graduate : ' . $item['Graduate'] . '<br><br>';
        echo 'Year4 : ' . $item['Year4'] . '<br><br>';
        echo 'Skills : ' . $item['Skills'] . '<br><br>';
        echo 'Literate : ' . $item['Literate'] . '<br><br>';
        echo 'Years : ' . $item['Years'] . '<br><br>';
        echo 'Months : ' . $item['Months'] . '<br><br>';
        echo 'User Level : ' . $item['User Level'] . '<br><br>';
        echo 'Employed : ' . $item['Employed'] . '<br><br>';
        echo 'Company : ' . $item['Company'] . '<br><br>';
        echo 'Position : ' . $item['Position'] . '<br><br>';
        echo 'Name1 : ' . $item['Name1'] . '<br><br>';
        echo 'Address1 : ' . $item['Address1'] . '<br><br>';
        echo 'Name2 : ' . $item['Name2'] . '<br><br>';
        echo 'Address2 : ' . $item['Address2'] . '<br><br>';
        echo 'Name3 : ' . $item['Name3'] . '<br><br>';
        echo 'Contact : ' . $item['Contact'] . '<br><br>';

    ?>

    <a href="ittc_member.php?ID=<?=$item['ID'] ?>" > EDIT </a>
    <form id="delete-form" action="ittc_delete.php" method="post">
        <input type="hidden" name="ID" value="<?=$item['ID'] ?>" />
        <button type="submit">Delete</button>
    </form>

    <script>
    $(function(){
        $('#delete-form').submit(function(event) {
            if (!confirm('Do you want to delete this FORM?')) {
                event.preventDefault();
            }
        });
    });
    </script>


</body>
</html>