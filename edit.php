<?php
include("header.php");
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "ovs") or die;
$id=$_GET["userid"];

$username="";
$email="";
$password="";

$res=mysqli_query($con,"SELECT * FROM newuser WHERE userid=$id") ;
while($row=mysqli_fetch_array($res))
{

    $username=$row["username"];
    $email=$row["email"];
    $password=$row["password"];
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
                            <h3 class="text-center text-info">Update User</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                            </div>
                            <div><input type="submit" name="update" class="btn btn-info btn-md" value="UPDATE"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
<?php
 if(isset($_POST["update"]))
 {
     $SQL="UPDATE newuser SET username='$_POST[username]',email='$_POST[email]',password='$_POST[password]' WHERE userid=$id";
     $SQLEx = $con->query($SQL);
     echo '<script>alert("Data update")</script>';

     ?>

     <script type="text/javascript">
     window.location="main.php";
     </script>
    
    <?php
 }
    ?>