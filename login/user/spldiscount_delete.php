<?php
include('dbconnect.php');
$c_id=$_REQUEST['c_id'];
$sql="delete from spldiscount where companyid ='$c_id'";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="spldiscount_view.php";
</script>