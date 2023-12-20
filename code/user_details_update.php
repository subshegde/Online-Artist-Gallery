<?php

include('../db_connection/dbconnect.php');
$uid=$_POST['uid'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$contno=$_POST['contno'];
$email_id=$_POST['email_id'];
$user_name=$_POST['user_name'];

$sql="update user_details set firstname='$firstname',lastname='$lastname',address='$address',contno='$contno',email_id='$email_id',user_name='$user_name' where uid='$uid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Updated...");
document.location="user_details_view.php";
</script>


