<?php
include('dbconnect.php');
$a_id=$_POST['a_id'];
$firstname=$_POST['fname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$specilization_art=$_POST['specilization_art'];
$total_experiance=$_POST['total_experiance'];

$sql="update  artist_info set firstname='$firstname',middlename='$middlename',lastname='$lastname',phone='$phone',gender='$gender',emailid='$emailid',address='$address',pincode='$pincode',specilization_art='$specilization_art',total_experiance='$total_experiance' where a_id='$a_id' ";
mysql_query($sql);
?>
<script>
alert("updeted....");
document.location="artist_info_view.php";
</script>