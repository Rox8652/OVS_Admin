<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "ovs");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lognew.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <?php
if($_SESSION['user']==true)
{

echo "welcome      "."   ".$_SESSION["user"];   
}
else {
    header('location:login.php');
}
?>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="logout.php">Logout</a>
      </li>
    </ul>
          </div>
          <a class="navbar-brand" href="#">
    <img src="logo.png.png" width="50" height="50" alt="">
  </a>
          <a class="navbar-brand font-weight-normal font-weight-bold" href="login.php" >Online Voting System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</nav>
</header>
<body class="bg-dark text-white">
<h2 align="center" class="text-warning">Admin Dashboard</h2>
               
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>userid</th>
        <th>username</th>
        <th>Email</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
  <?php
  $res=mysqli_query($con,"SELECT * from newuser");
  while($row=mysqli_fetch_array($res))
  {
    echo "<tr>";
    echo "<td>"; echo $row["userid"];
    echo "<td>"; echo $row["username"]; 
    echo "<td>"; echo $row["email"];
    echo "<td>"; ?> <a href="edit.php?userid=<?php echo $row["userid"]; ?>"><button type="button" class="btn btn-success">edit</button></a> <?php
    echo "<td>"; ?> <a href="delete.php?userid=<?php echo $row["userid"]; ?>"><button type="button" class="btn btn-danger">delete</button></a> <?php
echo "<tr>";
  }
  ?>
    </tbody>
  </table>
</div>
</body>
<?php
if(isset($_POST["display"]))
{
  echo"";
}
?>
</html>