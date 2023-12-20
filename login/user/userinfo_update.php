<?php
include("dbconnect.php");
$uid=$_POST['uid'];

$FIRSTNAME=$_POST['firstname'];
$MIDDLENAME=$_POST['middlename'];
$LASTNAME=$_POST['lastname'];
$PHONE=$_POST['phone'];
$GENDER=$_POST['gender'];
$EMAILID=$_POST['emailid'];
$ADDRESS=$_POST['address'];
$PINCODE=$_POST['pincode'];

 $sql="update userinfo set firstname='$FIRSTNAME',middlename='$MIDDLENAME',lastname='$LASTNAME',phone='$PHONE',gender='$GENDER',emailid='$EMAILID',address='$ADDRESS',pincode='$PINCODE' where userid='$uid'";
mysql_query($sql);

?>
<script>
alert("updeted..");
document.location="userinfo_view.php";
</script>