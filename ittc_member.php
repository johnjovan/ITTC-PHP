<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT TRAINING CENTER</title>
    <style>
        header {
            margin: 0;
            padding: 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $ID = $_GET['ID'];
    if($ID){
      $pdo = new PDO('mysql:host=localhost;dbname=ittc_member', 'root', 'zxcv1234');
      $stmt = $pdo->prepare('SELECT * FROM ittc_member WHERE ID = ?');
      $stmt->execute([ $ID ]);
      $item = $stmt->fetch();
    } else {
      $item = [];
    }
      ?>

    <header>
        <div id="title">
            <h1>IT TRAINING CENTER [APPLICATION FORM]</h1>
            <hr>
        </div>
    </header>
    <div class="container">
        <form method="post" action="ittc_action.php">
            <b>I.PERSONAL DATA:</b><br>
            <label>Picture Upload:
                <input type="file">
            </label><br>
            <label>Name:</label>
            <input type="text" name="Name" id="Name" placeholder="Full Name"><br>

            <label>Cellphone:</label>
            <input type="number" name="Number" id="Number"><br>

            <label>Address:</label>
            <input type="text" name="Address" id="Address"><br>

            <label>Birthday:</label>
            <input type="date" name="Birthday" id="Birthday">

            <label>Age:</label>
            <input type="age" name="Age" id="Age"><br>

            <label>Gender - Man</label>
            <input type="radio" name="Gender" id="Man" value="man">

            <label> Woman</label>
            <input type="radio" name="Gender" id="Woman" value="woman"><br>

            <label>Height:</label>
            <input type="number" name="Height" id="Height">Cm

            <label>Weight:</label>
            <input type="number" name="Weight" id="Weight">Kg <br>

            <label>Civil Status:</label>
            <input type="text" name="Status" id="Status"><br>

            <label>Name of Spouse (If Married):</label>
            <input type="text" name="Spouse" id="Spouse"><br>

            <label>Number of Children (If Have):</label>
            <input type="number" name="Children" id="Children"><br>

            <label>Religious Affilation:</label>
            <input type="text" name="Pastor" id="Pastor">

            <hr>

            <b>II.EDUCATIONAL BACKGROUND:</b><br>
            <label>Elementary:</label>
            <input type="text" name="Elementary">

            <label> Year:</label>
            <input type="number" name="Year1"><br>

            <label>High School:</label>
            <input type="text" name="HS">

            <label> Year:</label>
            <input type="number" name="Year2"><br>

            <label>College:</label>
            <input type="text" name="College">

            <label> Year:</label>
            <input type="number" name="Year3"><br>

            <label>Post Graduate:</label>
            <input type="text" name="Graduate">

            <label> Year:</label>
            <input type="number" name="Year4"><br>

            <label>Special Skills:</label>
            <textarea name="Skills" cols="50" rows="5"></textarea>

            <hr>

            <b>III.QUESTION:</b><br>
            <label>1.Are you computer literate?</label>
            YES <input type="radio" name="Literate" value="yes">
            NO <input type="radio" name="Literate" value="no"><br>
            <label>2.How long have you been using the computer?</label> <br>
            <input type="number" name="Years"> Years
            <input type="number" name="Months"> Months <br>
            <label>3.If you rate your computer skills, Kindly check: </label>
            <input type="radio" name="User" value="1"> (1)Beginner user
            <input type="radio" name="User" value="2"> (2)Advanced user
            <input type="radio" name="User" value="3"> (3)Expert user <br>
            <label>4.Are you currently employed?</label>
            YES <input type="radio" name="Employed" value="yes1">
            NO <input type="radio" name="Employed" value="no1"> <br>
            <label></label>
            <label>5.(4-If yes)Name if Company?</label> <br>
            Company <input type="text" name="Company" placeholder="Company">
            Position <input type="text" name="Position" placeholder="Position">

            <hr>

            <b>IV.CHARACTER REFERENCES:</b><br>
            <label>Name 1: </label>
            <input type="text" name="Name1" placeholder="Fullname" size="30px"> <br>
            <label>Address: </label>
            <input type="text" name="Address1" size="50px"> <br>
            <label>Name 2: </label>
            <input type="text" name="Name2" placeholder="Fullname" size="30px"> <br>
            <label>Address: </label>
            <input type="text" name="Address2" size="50px">

            <hr>

            <b>V.Person to be contacted in case of emergency:</b>
            <label>Name: </label>
            <input type="text" name="Name3" placeholder="Fullname">
            <label>Contact Number: </label>
            <input type="number" name="Contact"> <br>

            <hr>

            <input type="submit" id="submit" value="Save Data">

        </form>
    </div>
    <br><br><br><br><br><br><br>

</body>

</html>