<?php
include('dbconnect.php');
$t_id=$_REQUEST['t_id'];
$sql="delete from  tempcart where transid ='$t_id'";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="tempcart_view.php";
</script>