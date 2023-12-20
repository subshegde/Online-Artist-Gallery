<?php
include('dbconnect.php');
$uid=$_REQUEST['u_id'];
$sql="delete from  userinfo where userid='$uid'";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="userinfo_view.php";
</script>