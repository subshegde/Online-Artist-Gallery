<?php

include('../db_connection/dbconnect.php');

$aname=$_POST['aname'];
$work_exp=$_POST['work_exp'];
$a_winning=$_POST['a_winning'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$cont_no=$_POST['cont_no'];
$user_name=$_POST['user_name'];

$sql="insert into  artist_details values(null,'$aname','$work_exp','$a_winning','$address','$email_id','$cont_no','$user_name') ";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="artist_details_view.php";
</script>