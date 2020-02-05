<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ITTC List</title>
</head>
<body>
    <?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=ittc_member', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM ittc_member');
    $stmt->execute();
    $list = $stmt->fetchAll();
    print_r($stmt->errorInfo());

    


    ?>
    <a href="ittc_member.php">Member Form</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Address</th>
                <th>Birthday</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Status</th>
                <th>Spouse</th>
                <th>Children</th>
                <th>Pastor</th>
                <th>Elementary</th>
                <th>Year1</th>
                <th>HS</th>
                <th>Year2</th>
                <th>College</th>
                <th>Year3</th>
                <th>Graduate</th>
                <th>Year4</th>
                <th>Skills</th>
                <th>Literate</th>
                <th>Years</th>
                <th>Months</th>
                <th>User Level</th>
                <th>Employed</th>
                <th>Company</th>
                <th>Position</th>
                <th>Name1</th>
                <th>Address1</th>
                <th>Name2</th>
                <th>Address2</th>
                <th>Name3</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $item) { ?>
                <tr>
                    <td><a href="ittc_view.php?ID=<?=$item['ID']?>"><?=$item['Name'] ?></a></td>
                    <td><?=$item['Number'] ?></td>
                    <td><?=$item['Address'] ?></td>
                    <td><?=$item['Birthday'] ?></td>
                    <td><?=$item['Age'] ?></td>
                    <td><?=$item['Gender'] ?></td>
                    <td><?=$item['Height'] ?></td>
                    <td><?=$item['Weight'] ?></td>
                    <td><?=$item['StatusDocument'] ?></td>
                    <td><?=$item['Elementary'] ?></td>
                    <td><?=$item['Year1'] ?></td>
                    <td><?=$item['HS'] ?></td>
                    <td><?=$item['Year2'] ?></td>
                    <td><?=$item['College'] ?></td>
                    <td><?=$item['Year3'] ?></td>
                    <td><?=$item['Graduate'] ?></td>
                    <td><?=$item['Year4'] ?></td>
                    <td><?=$item['Skills'] ?></td>
                    <td><?=$item['Literate'] ?></td>
                    <td><?=$item['Years'] ?></td>
                    <td><?=$item['Months'] ?></td>
                    <td><?=$item['User Level'] ?></td>
                    <td><?=$item['Employed'] ?></td>
                    <td><?=$item['Company'] ?></td>
                    <td><?=$item['Position'] ?></td>
                    <td><?=$item['Name1'] ?></td>
                    <td><?=$item['Address1'] ?></td>
                    <td><?=$item['Name2'] ?></td>
                    <td><?=$item['Address2'] ?></td>
                    <td><?=$item['Name3'] ?></td>
                    <td><?=$item['Contact'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>



</body>
</html>