<?php

include('../db_connection/dbconnect.php');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$contno=$_POST['contno'];
$email_id=$_POST['email_id'];
$user_name=$_POST['user_name'];

$sql="insert into user_details values(null,'$firstname','$lastname','$address','$contno','$email_id','$user_name')";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="user_details_view.php";
</script>

