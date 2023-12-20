<?php
include('dbconnect.php');
$aid=$_REQUEST['a_id'];
$sql="delete from  artist_info where a_id='$aid'";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="artist_info_view.php";
</script>