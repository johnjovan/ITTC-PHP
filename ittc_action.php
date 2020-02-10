<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ITTC ACTION</title>
    <style>
    
    </style>
</head>
<body>
    <?php
    // file
    // uploads_dir = ' ';

    $filepath = null;
    if($_FILES['Image']['error'] === UPLOAD_ERR_OK) {
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['Image']['name']);

    if (!is_dir(upload)){
        mkdir($uploaddir);

        // MKDIR - create/MaKe DIRectory
    }

    if (move_uploaded_file($_FILES['Image']['tmp_name'], $uploadfile)){
        // echo "file upload success.";
        $filepath = '/uploads/'.basename($_FILES['Image']['name']);
    } else {
        echo 'files information:';
        print_r($_FILES);
    }
}

    $ID = $_POST ['ID'];
    $Name = $_POST[Name];
    $Number = $_POST[Number];
    $Address = $_POST[Address];
    $Birthday = $_POST[Birthday];
    $Age = $_POST[Age];
    $Gender = $_POST[Gender];
    $Height = $_POST[Height];
    $Weight = $_POST[Weight];
    $Status = $_POST[Status];
    $Spouse= $_POST[Spouse];
    $Children = $_POST[Children];
    $Pastor = $_POST[Pastor];

    $Elementary = $_POST[Elementary];
    $Year1 = $_POST[Year1];
    $HS = $_POST[HS];
    $Year2 = $_POST[Year2];
    $College = $_POST[College];
    $Year3 = $_POST[Year3];
    $Graduate = $_POST[Graduate];
    $Year4 = $_POST[Year4];
    $Skills = $_POST[Skills];

    $Literate = $_POST[Literate];
    $Years = $_POST[Years];
    $Months = $_POST[Months];
    $User = $_POST[User];
    $Employed = $_POST[Employed];
    $Company = $_POST[Company];
    $Position = $_POST[Position];

    $Name1 = $_POST[Name1];
    $Address1 = $_POST[Address1];
    $Name2 = $_POST[Name2];
    $Address2 = $_POST[Address2];

    $Name3 = $_POST[Name3];
    $Contact = $_POST[Contact];
    
    $pdo = new PDO('mysql:host=localhost;dbname=ittc_member', 'root', 'zxcv1234');

    if ($ID) {
        $sql = 'UPDATE ittc_member
        SET Name = :Name,
        Number = :Number,
        Address = :Address,
        Birthday = :Birthday,
        Age = :Age,
        Gender = :Gender,
        Height = :Height,
        Weight = :Weight,
        Status = :Status,
        Spouse = :Spouse,
        Children = :Children,
        Pastor = :Pastor,
        Elementary = :Elementary,
        Year1 = :Year1,
        HS = :HS,
        Year2 = :Year2,
        College = :College,
        Year3 = :Year3,
        Graduate = :Graduate,
        Year4 = :Year4,
        Skills = :Skills,
        Literate = :Literate,
        Years = :Years,
        Months = :Months,
        User = :User,
        Employed = :Employed,
        Company = :Company,
        Position = :Position,
        Name1 = :Name1,
        Address1 = :Address1,
        Name2 = :Name2,
        Address2 = :Address2,
        Name3 = :Name3,
        Contact = :Contact';
        if ($filepath) {
            $sql .= ',Image = :image';
        }

        $sql .= ' WHERE ID = :ID';
        $stmt = $pdo-prepare($sql);
        $params = [
            'ID' => $ID,
            'Name' => $Name,
            'Number' => $Number,
            'Address' => $Address,
            'Birthday' => $Birthday,
            'Age' => $Age,
            'Gender' => $Gender,
            'Height' => $Height,
            'Weight' => $Weight,
            'Status' => $Status,
            'Spouse' => $Spouse,
            'Children' => $Children,
            'Pastor' => $Pastor,
            'Elementary' => $Elementary,
            'Year1' => $Year1,
            'HS' => $HS,
            'Year2' => $Year2,
            'College' => $College,
            'Year3' => $Year3,
            'Graduate' => $Graduate,
            'Year4' => $Year4,
            'Skills' => $Skills,
            'Literate' => $Literate,
            'Years' => $Years,
            'Months' => $Months,
            'User' => $User,
            'Employed' => $Employed,
            'Company' => $Company,
            'Position' => $Position,
            'Name1' => $Name1,
            'Address1' => $Address1,
            'Name2' => $Name2,
            'Address2' => $Address2,
            'Name3' => $Name3,
            'Contact' => $Contact,
        ];
        if ($filepath) {
            $params['Image'] = $filepath;
        }
        $stmt->execute($params);
    } else {
        $stmt = $pdo->prepare('INSERT INTO ittc_member (
            Name, Number, Address, Birthday, Age, Gender, Height, Weight, Status,
            Spouse, Children, Pastor, Elementary, Year1, HS, Year2, College,
            Year3, Graduate, Year4, Skills, Literate, Years, Months, User,
            Employed, Company, Position, Name1, Address1, Name2, Address2,
            Name3, Contact, Image
            ) VALUES (
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
            )');
            $stmt->execute([ $Name, $Number, $Address, $Birthday, $Age, $Gender, $Height, $Weight,
                $Status, $Spouse, $Children, $Pastor, $Elementary, $Year1, $HS, $Year2, $College,
                $Year3, $Graduate, $Year4, $Skills, $Literate, $Years, $Months, $User, $Employed,
                $Company, $Position, $Name1, $Address1, $Name2, $Address2, $Name3, $Contact, $filepath]);
    }

    // print_r($stmt->errorInfo());

    echo 'Name : ' . $Name . '<br><br>';
    echo 'Number : ' . $Number . '<br><br>';
    echo 'Address : ' . $Address . '<br><br>';
    echo 'Birthday : ' . $Birthday . '<br><br>';
    echo 'Age : ' . $Age . '<br><br>';
    echo 'Gender : ' . $Gender . '<br><br>';
    echo 'Height : ' . $Height . '<br><br>';
    echo 'Weight : ' . $Weight . '<br><br>';
    echo 'Status : ' . $Status . '<br><br>';
    echo 'Spouse : ' . $Spouse . '<br><br>';
    echo 'Children : ' . $Children . '<br><br>';
    echo 'Pastor : ' . $Pastor . '<br><br>';
    echo 'Elementary : ' . $Elementary . '<br><br>';
    echo 'Year1 : ' . $Year1 . '<br><br>';
    echo 'HS : ' . $HS . '<br><br>';
    echo 'Year2 : ' . $Year2 . '<br><br>';
    echo 'College : ' . $College . '<br><br>';
    echo 'Year3 : ' . $Year3 . '<br><br>';
    echo 'Graduate : ' . $Graduate . '<br><br>';
    echo 'Year4 : ' . $Year4 . '<br><br>';
    echo 'Skills : ' . $Skills . '<br><br>';
    echo 'Literate : ' . $Literate . '<br><br>';
    echo 'Years : ' . $Years . '<br><br>';
    echo 'Months : ' . $Months . '<br><br>';
    echo 'User Level : ' . $User . '<br><br>';
    echo 'Employed : ' . $Employed . '<br><br>';
    echo 'Company : ' . $Company . '<br><br>';
    echo 'Position : ' . $Position . '<br><br>';
    echo 'Name1 : ' . $Name1 . '<br><br>';
    echo 'Address1 : ' . $Address1 . '<br><br>';
    echo 'Name2 : ' . $Name2 . '<br><br>';
    echo 'Address2 : ' . $Address2 . '<br><br>';
    echo 'Name3 : ' . $Name3 . '<br><br>';
    echo 'Contact : ' . $Contact . '<br><br>';

    ?>

    <a href="ittc_list.php">Go To List</a>

</body>
</html>