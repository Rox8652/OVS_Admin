
<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "ovs");
$id=$_GET["userid"];
mysqli_query($con,"delete from newuser where userid=$id");
echo '<script>alert("user deleted")</script>';

?>

<script type="text/javascript">
window.location="main.php";
</script>
