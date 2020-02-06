<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ITTC List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        span a{
            position: relative;
            top: 20px;
        }
        #form{
            margin: 20px 10px;
            border: 2px solid black;
            border-radius: 6px;
            text-decoration: none;
            color: blueviolet;
            background-color: black;
            font-size: large;
            font-weight: bold;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        #name-list{
            position: relative;
            top: 50px;
        }
        #form:hover{
            color: black;
            background: blueviolet;
            border: none;
        }
        #name-list{
            text-decoration: none;
        }
        .name{
            padding: 5px;
            border: 3px solid black;
            text-decoration: none;
            color: black;
            background-color: yellow;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=ittc_member', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM ittc_member');
    $stmt->execute();
    $list = $stmt->fetchAll();

    // print_r($stmt->errorInfo());


    ?>

        <span><a id="form" href="ittc_member.php">Member Form</a></span>

    <div id="name-list">
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
                <th>Skills</th>
                <th>Literate</th>
                <th>Years</th>
                <th>Months</th>
                <th>User Level</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $item) { ?>
                <tr>
                    <td><a class="name" href="ittc_view.php?ID=<?=$item['ID']?>"><?=$item['Name'] ?></a></td>
                    <td><?=$item['Number'] ?></td>
                    <td><?=$item['Address'] ?></td>
                    <td><?=$item['Birthday'] ?></td>
                    <td><?=$item['Age'] ?></td>
                    <td><?=$item['Gender'] ?></td>
                    <td><?=$item['Height'] ?></td>
                    <td><?=$item['Weight'] ?></td>
                    <td><?=$item['Status'] ?></td>
                    <td><?=$item['Skills'] ?></td>
                    <td><?=$item['Literate'] ?></td>
                    <td><?=$item['Years'] ?></td>
                    <td><?=$item['Months'] ?></td>
                    <td><?=$item['User Level'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>