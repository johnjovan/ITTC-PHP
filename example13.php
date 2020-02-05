<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PHP Example Member</title>
    <style>
      body {
        background: black;
        width: 100%;
      }

      label {
        width: 140px;
        display: inline-block;
        font-weight: bolder;
        font-size: large;
      }

      div {
        position: absolute;
        top: 10%;
        left: 32.5%;
        padding-left: 50px;
        width: 30%;
        height: 75%;
        background: blueviolet;
        border-radius: 38px;
        background: linear-gradient(315deg, #6c4ddb, #805bff);
        box-shadow: -41px -41px 31px #433088, 41px 41px 31px #ad7aff;
      }

      div input {
        padding: 7px;
        color: yellow;
        border: none;
        background: transparent;
        font-size: 18px;
        outline: none;
        font-weight: bolder;
      }

      div input:focus {
        outline: none;
      }

      ::-webkit-input-placeholder {
        color: yellow;
      }

      #submit {
        border-radius: 10px;
        background: crimson;
        cursor: pointer;
        line-height: 20px;
        font-weight: bolder;
        font-size: large;
        color: indigo;
        padding: 12px;
      }

      #submit:hover {
        color: black;
        background: blueviolet;
      }
      #text{
        color: white;
        font-size: 1000px;
      }
    </style>
  </head>

  <body>
    <?php
    $id = $_GET['id'];
    if($id){
      $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
      $stmt = $pdo->prepare('SELECT * FROM example13_member WHERE id = ?');
      $stmt->execute([ $id ]);
      $item = $stmt->fetch();
    } else {
      $item = [];
    }
      ?>


    <span>
      <div id="text">
        <p>C-Create</p>
        <p>R-Read</p>
        <p>U-Update</p>
        <p>D-Delete</p>
      </div>
    </span>
    <div>
      <h1>Join Member Form</h1>
      <form method="post" action="example13_action.php">
        <input type="hidden" name="id" value="<?=$item['id']?>">
        <label>User ID:</label>
        <input
          type="text"
          name="userid"
          id="userid"
          placeholder="User ID"
          maxlength="20"
          value="<?=$item['userid'] ?>"
        /><br /><br />
        <label>Password:</label>
        <input
          type="password"
          name="userpw"
          id="userpw"
          placeholder="User Password"
          maxlength="20"
          value="<?=$item['userpw'] ?>"
        /><br /><br />
        <label>Password Check:</label>
        <input
          type="password"
          name="userpw2"
          id="userpw2"
          placeholder="Password Check"
          maxlength="20"
        /><br /><br />
        <label>First Name:</label>
        <input
          type="text"
          name="firstname"
          id="firstname"
          placeholder="First Name"
          maxlength="20"
          value="<?=$item['firstname'] ?>"
        /><br /><br />
        <label>Middle Name:</label>
        <input
          type="text"
          name="middlename"
          id="middlename"
          placeholder="Middle Name"
          maxlength="20"
          value="<?=$item['middlename'] ?>"
        /><br /><br />
        <label>Last Name:</label>
        <input
          type="text"
          name="lastname"
          id="lastname"
          placeholder="Last Name"
          maxlength="20"
          value="<?=$item['lastname'] ?>"
        /><br /><br />
        <label>Birthday</label>
        <input type="date" name="birth" id="birth" 
          value="<?=$item['birth'] ?>" /><br /><br />
        <label>Address:</label>
        <input
          type="text"
          name="address"
          id="address"
          placeholder="Address"
          size="35px"
          value="<?=$item['address'] ?>"
        /><br /><br />
        <label>Post Number:</label>
        <input
          type="number"
          name="post"
          id="post"
          placeholder="Post Number"
          maxlength="4"
          value="<?=$item['post'] ?>"
        /><br /><br />

        <input type="submit" id="submit" value="Sign Up" />
      </form>
    </div>
  </body>
</html>
