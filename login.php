<?php

include 'conn.php';
   
    $Nerr = $Perr = "";
    //$uname = $pswd ="";

    function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;

        }

    if(isset($_POST['submit'])){

        $uname = $_POST['username'];
        $pswd = $_POST['password'];

        $q = "INSERT INTO `login1`(`username`, `password`) VALUES ('$uname','$pswd')";

        $query = mysqli_query($con,$q);


        if(empty($_POST['username'])){
            $Nerr = "Name is required!";
        } else{
            $uname = test_input($_POST['username']);

            if(!preg_match("/^[a-zA-Z-' ]*$/",$uname)){
                $Nerr = "Only letters and white space allowed";
            }
        }
        

        if(empty($_POST['password'])){
            $Perr = "Password is required";
        } else{
            $pswd = test_input($_POST['password']);

            if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pswd)){
                $Perr = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
            }
        }



    }

    
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type="text/css">
    #main{
        background-color: #333;
        width: 600px;
        height: 300px;
        border-radius: 30px;
    }
    h1{
        color: white;
        background-color: black;
        border-top-right-radius: 40px;
        border-top-left-radius: 40px;
    }
    .text{
        background-color: #333;
        color: white;
        width: 250px;
        font-weight: bold;
        font-size: 20px;
        border: none;
        text-align: center;
    }
    .text:focus{
        outline: none;
    }
    hr{
        width: 250px;
        margin-top: 0px !important;
    }
    #sub{
        width: 250px;
        height: 30px;
        background-color: #5f5;
        border: none;
    }
 </style>

</head>
<body>
<div id="main">
<center><h1>Simple login</h1></center>
<form method="POST" action="insert.php">
<center><input type="text" name="username" class="text" autocomplete="off" required placeholder="usernamee"></center><br><hr><br>
<center><input type="password" name="password" class="text" autocomplete="off" required placeholder="password"></center><br><hr><br>
<center><input type="Submit" name="submit" id="sub"></center>
</form>
</div>
</body>
</html>


