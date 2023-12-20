<?php session_start(); ?>
<?php include('dbconnect.php'); ?>
<?php

$username=$_POST['username'];
//$password=md5($_POST['password']);
$password=$_POST['password'];

$sql="select * from login where user_name='$username' and password='$password' ";
$res=$conn->query($sql);
if($row=mysqli_fetch_array($res))
{
$_SESSION['uname']=$username;
$type=$row["type"];
if($type=="admin")
{
header('location:admin/home.php');

}

else if($type=="user")
{
header('location:user/home.php');

}

if($type=="artist")
{
header('location:artist/home.php');

}

}
else
{
?>
<script>
alert("Invalid User Name or password");
document.location="login/index.html";
</script>
<?php
}

?>
