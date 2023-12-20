
<?php

include('../db_connection/dbconnect.php');

$bank_id=$_REQUEST['bank_id'];

$sql="delete from bank_details where bank_id  ='$bank_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("Deleted...");
document.location="bank_details_view.php";
</script>

