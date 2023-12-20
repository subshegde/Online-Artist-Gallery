
<?php

include('../db_connection/dbconnect.php');

$uid=$_POST['uid'];
$gid=$_POST['gid'];
$bank_name=$_POST['bank_name'];
$amt=$_POST['amt'];
$pdate=$_POST['pdate'];
$p_status=$_POST['p_status'];

$sql="insert into payment_details values(null,'$uid','$gid','$bank_name','$amt','$pdate','$p_status')";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="payment_details_view.php";
</script>

