<?php
 
include('../db_connection/dbconnect.php'); 

$aid=$_POST['aid'];
$aname=$_POST['aname'];
$work_exp=$_POST['work_exp'];
$a_winning=$_POST['a_winning'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$cont_no=$_POST['cont_no'];
$user_name=$_POST['user_name'];

$sql="update artist_details set aname='$aname',work_exp='$work_exp',a_winning='$a_winning',address='$address',email_id='$email_id',cont_no='$cont_no',user_name='$user_name' where  aid='$aid'";
mysqli_query($conn,$sql);

?>
<script>
alert("Updated...");
document.location="artist_details_view.php";
</script>
