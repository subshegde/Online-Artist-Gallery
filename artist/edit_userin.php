<?php include('dbconnect.php') ?>

<?php

$uid=$_POST['userid'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$addr=$_POST['addrs'];
$contno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$username=$_POST['username'];
$sql="update User_Details set firstname='$fname',lastname='$lname',address='$addr',contno='$contno',email_id='$emailid',user_name='$username' where uid='$uid' ";
$conn->query($sql);
?>

<script>
alert("Record Is updated..");
document.location="viewuserdetails.php";
</script>