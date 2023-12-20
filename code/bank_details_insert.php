<?php

include('../db_connection/dbconnect.php');

$user_name=$_POST['user_name'];
$card_no=$_POST['card_no'];
$pin_no=$_POST['pin_no'];


$sql="insert into bank_details values(null,'$user_name','$card_no','$pin_no') ";
mysqli_query($conn,$sql);

?>
<script>
alert("Inserted....");
document.location="bank_details_view.php";
</script>