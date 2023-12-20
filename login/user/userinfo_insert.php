<?php
include("dbconnect.php");
$USER_ID=$_POST['user_id'];
$FIRSTNAME=$_POST['firstname'];
$MIDDLENAME=$_POST['middlename'];
$LASTNAME=$_POST['lastname'];
$PHONE=$_POST['phone'];
$GENDER=$_POST['gender'];
$EMAILID=$_POST['emailid'];
$ADDRESS=$_POST['address'];
$PINCODE=$_POST['pincode'];
$sql="insert into userinfo values('$USER_ID','$FIRSTNAME','$MIDDLENAME','$LASTNAME','$PHONE','$GENDER','$EMAILID','$ADDRESS','$PINCODE')";
mysql_query($sql);
?>

<script>
alert("Inserted....");
document.location="userinfo.php";
</script>
