<?php
include('dbconnect.php');
$aid=$_REQUEST['a_id'];
$sql="delete from gallary_info where artid='$aid'";
mysql_query($sql);
?>
<script>
alert("values is deleted..");
document.location="gallery_info_view.php";
</script>