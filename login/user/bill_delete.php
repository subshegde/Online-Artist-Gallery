<?php
include('dbconnect.php');
$t_id=$_REQUEST['t_id'];
$sql="delete from  bill where transid='$t_id'";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="bill_view.php";
</script>