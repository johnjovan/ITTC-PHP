<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT TRAINING CENTER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background: black;
        }
        header {
            height: 
            margin-top: 10px;
            text-align: center;
            color: white;
            background: black;
        }
        input, textarea{
            background: black;
            color: white;
            border-radius: 4px;
            border: none;
        }
        
        #form{
            background-image: url("../Images/Brown.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }
        
        #I label{
            width: 210px;
            display: inline-block;
        }
        #II label{
            width: 110px;
            display: inline-block;
        }
        #Man{
            position: relative;
            left: -15%;
        }
        #Woman{
            position: relative;
            left: -13%;
        }
        #age{
            position: relative;
            left: 15%;
        }
        #weight{
            position: relative;
            left: 10%;
        }
        #Weight{
            position: relative;
            left: -40px;
        }
        #IV label{
            width: 110px;
            display: inline-block;
        }
        #V label{
            width: 125px;
            display: inline-block;
        }
        #submit{
            letter-spacing: 0.5px;
            font-size: 20px;
            font-weight: bold;
            color: blueviolet;
            word-spacing: 3px;
            width: 100%;
        }
        #submits{
            position: absolute;
            left: 50%;
            padding: 10px;
            border: none;
            background: black;
            border-radius: 6px;
            transform: translate(-50%,-50%);
            box-shadow: 0 20px 50px rgba(0,0,0,.9);
            overflow: hidden;
        }
        /* #submits:before{
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            bottom: 2px;
            width: 50%;
            background: rgba(255,255,255,0.05);
        } */
        #submits span:nth-child(1){
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, pink, violet, indigo);
            animation: animate1 2s linear infinite;
        }
        @keyframes animate1{
            0%
            {
                transform: translateX(-100%);
            }
            100%
            {
                transform: translateX(100%);
            }
        }
        #submits span:nth-child(2){
            position: absolute;
            top: 0;
            right: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(to bottom, pink, violet, indigo);
            animation: animate2 2s linear infinite;
            animation-delay: 1s;
        }
        @keyframes animate2{
            0%
            {
                transform: translateY(-100%);
            }
            100%
            {
                transform: translateY(100%);
            }
        }
        #submits span:nth-child(3){
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to left, pink, violet, indigo);
            animation: animate3 2s linear infinite;
        }
        @keyframes animate3{
            0%
            {
                transform: translateX(100%);
            }
            100%
            {
                transform: translateX(-100%);
            }
        }
        #submits span:nth-child(4){
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(to top, pink, violet, indigo);
            animation: animate4 2s linear infinite;
            animation-delay: 1s;
        }
        @keyframes animate4{
            0%
            {
                transform: translateY(100%);
            }
            100%
            {
                transform: translateY(-100%);
            }
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
    <div class="container">
    <header>
        <div id="title">
            <h1>IT TRAINING CENTER [APPLICATION FORM]</h1>
        </div>
    </header>
    <hr>
    </div>
    <div id="form" class="container">
        <form method="post" action="ittc_action.php" enctype="multipart/form-data">
        <div id="I">
            <b>I.PERSONAL DATA:</b><br>
            <label>Picture Upload:
                <input type="file" name="Image">
            </label><br>
            <label>Name:</label>
            <input type="text" name="Name" id="Name" placeholder="Full Name" required><br>

            <label>Cellphone:</label>
            <input type="number" name="Number" id="Number"><br>

            <label>Address:</label>
            <input type="text" name="Address" id="Address" size="40"><br>

            <label>Birthday:</label>
            <input type="date" name="Birthday" id="Birthday"> 
            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&gt;&lt;&quot;&#13; -->

            <label id="age">Age:</label>
            <input type="number" name="Age" id="Age" min="0" max="100"><br>

            <label>Gender:</label>
            <label> Man</label>
            <input type="radio" name="Gender" id="Man" value="Man">

            <label> Woman</label>
            <input type="radio" name="Gender" id="Woman" value="Woman"><br>

            <label>Height:</label>
            <input type="number" name="Height" id="Height" placeholder="Cm">

            <label id="weight">Weight:</label>
            <input type="number" name="Weight" id="Weight" placeholder="Kg"> <br>

            <label>Civil Status:</label>
            <input type="text" name="Status" id="Status"><br>

            <label>Name of Spouse (If Married):</label>
            <input type="text" name="Spouse" id="Spouse"><br>

            <label>Number of Children (If Have):</label>
            <input type="number" name="Children" id="Children"><br>

            <label>Religious Affilation:</label>
            <input type="text" name="Pastor" id="Pastor">

        </div>

            <hr>

        <div id="II">
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
            <textarea name="Skills" cols="58" rows="5"></textarea>
        </div>

            <hr>

        <div id="III">
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
            Company: <input type="text" name="Company" placeholder="Company">
            Position: <input type="text" name="Position" placeholder="Position">
        </div>

            <hr>
        <div id="IV">
            <b>IV.CHARACTER REFERENCES:</b><br>
            <label>Name 1: </label>
            <input type="text" name="Name1" placeholder="Fullname" size="30px"> <br>
            <label>Address: </label>
            <input type="text" name="Address1" size="50px"> <br>
            <label>Name 2: </label>
            <input type="text" name="Name2" placeholder="Fullname" size="30px"> <br>
            <label>Address: </label>
            <input type="text" name="Address2" size="50px">
        </div>

            <hr>

        <div id="V">
            <b>V.Person to be contacted in case of emergency:</b><br>
            <label>Name: </label>
            <input type="text" name="Name3" placeholder="Fullname"><br>
            <label>Contact Number: </label>
            <input type="number" name="Contact"> <br>
        </div>
        <br><br>
            <hr>
            
            <a id="submits">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" id="submit" value="Save Data">
            </a>
            <!-- <div id="Savedata">
                <span></span>
                <span></span>
                <input type="submit" id="submit" value="Save Data">
                <span></span>
                <span></span>
            </div> -->


            <br><br><br><br><br>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>