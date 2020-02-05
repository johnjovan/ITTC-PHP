<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Action</title>
</head>
<body>
    <?php
    $id = $_POST['id'];

    $userid = $_POST[userid];
    
    $userpw = $_POST[userpw];
    
    $userpw2 = $_POST[userpw2];
    
    $firstname = $_POST[firstname];
    
    $middlename = $_POST[middlename];
    
    $lastname = $_POST[lastname];
    
    $birth = $_POST[birth];
    
    $address = $_POST[address];
    
    $post = $_POST[post];

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');

    if ($id) {
        // edit record
        $sql = 'UPDATE example13_member
        SET userid = :userid,
        firstname = :firstname,
        middlename = :middlename,
        lastname = :lastname,
        birthday = :birthday,
        address = :address,
        post = :post';
        if ($userpw) {
            $sql .= ',password = :password';
        }
        $sql .= ' WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $params = [
            'userid' => $userid,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'lastname' => $lastname,
            'birthday' => $birthday,
            'address' => $address,
            'post' => $post,
            'id' => $id,
        ];
        if ($userpw) {
            $params['password'] = $userpw;
        }
        $stmt->execute($params);
    } else {
        // create new record
        $stmt = $pdo->prepare('INSERT INTO example13_member (
            userid, password, firstname, middlename, lastname, birthday, address, post
            ) VALUES (
                ?,?,?,?,?,?,?,?
            )');
            $stmt->execute([ $userid, $userpw, $firstname, $middlename, $lastname, $birth, $address, $post]);
    }
    

    print_r($stmt->errorInfo());


    echo 'User ID : ' . $userid . '<br><br>';
    echo 'User Password : ' . $userpw . '<br><br>';
    echo 'Password Check : ' . $userpw2 . '<br><br>';
    echo 'First Name : ' . $firstname . '<br><br>';
    echo 'Middle Mame : ' . $middlename . '<br><br>';
    echo 'Last Name : ' . $lastname . '<br><br>';
    echo 'Birthday : ' . $birth . '<br><br>';
    echo 'Address : ' . $address . '<br><br>';
    echo 'Post Number : ' . $post . '<br><br>';
    
    ?>
    <a href="example13_list.php">Go to List</a>
</body>
</html>