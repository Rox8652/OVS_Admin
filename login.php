<?php
include("header.php");
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "ovs");

if(isset($_REQUEST["submit"])){
    $user=$_REQUEST["username"];
    $pass=$_REQUEST["password"];
    $query=mysqli_query($con,"select * from admin where username='$user' and password='$pass'");
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true){
       $_SESSION["user"]=$user; 
     header('location:main.php');
    }
    else{
        echo "username and password is worng";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lognew.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-dark text-white">
<div class="p-3 mb-2 bg-dark text-white">
<!--<h1 id="ovs" align="center">Online Ovting System</h1>-->
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 p-3 mb-2 bg-dark text-white">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Admin Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md btn-primary" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="newuser.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>