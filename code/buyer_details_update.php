<?php

include('../db_connection/dbconnect.php');

$bid=$_POST['bid'];
$bname=$_POST['bname'];
$address=$_POST['address'];
$bcity=$_POST['bcity'];
$cont_no=$_POST['cont_no'];
$email_id=$_POST['email_id'];
$work_status=$_POST['work_status'];
$user_name=$_POST['user_name'];


$sql="update buyer_details set bname='$bname',address='$address',bcity='$bcity',cont_no='$cont_no',email_id='$email_id',work_status='$work_status',user_name='$user_name' where bid='$bid'";
mysqli_query($conn,$sql);


?>
<script>
alert("Updated...");
document.location="buyer_details_view.php";
</script>

