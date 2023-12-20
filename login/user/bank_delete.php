<?php
include('dbconnect.php');
$u_id=$_REQUEST['u_id'];
$sql="delete from bank where userid='$u_id' ";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="bank_view.php";
</script>