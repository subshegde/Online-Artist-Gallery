<?php

include('../db_connection/dbconnect.php');

$bank_id=$_POST['bank_id'];
$user_name=$_POST['user_name'];
$card_no=$_POST['card_no'];
$pin_no=$_POST['pin_no'];


$sql="update bank_details set user_name='$user_name',card_no='$card_no',pin_no='$pin_no' where bank_id='$bank_id'";
mysqli_query($conn,$sql);


?>
<script>
alert("Updated...");
document.location="bank_details_view.php";
</script>
