
<?php

include('../db_connection/dbconnect.php');

$bname=$_POST['bname'];
$address=$_POST['address'];
$bcity=$_POST['bcity'];
$cont_no=$_POST['cont_no'];
$email_id=$_POST['email_id'];
$work_status=$_POST['work_status'];
$user_name=$_POST['user_name'];

$sql="insert into buyer_details values(null,'$bname','$address','$bcity','$cont_no','$email_id','$work_status','$user_name') ";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="buyer_details_view.php";
</script>
