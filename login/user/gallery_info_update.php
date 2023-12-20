<?php
include("dbconnect.php");
$a_id=$_POST['a_id'];
$ARTNAME=$_POST['artname'];
$ARTTYPE=$_POST['arttype'];
$PRICE=$_POST['price'];
$DATE_OF_LAUNCH=$_POST['g_date'];
$STOCK=$_POST['stock'];
$DESCRIPTION=$_POST['discription'];
$SAMPLE_IMAGES=$_POST['file'];
$ARTIST_NAME=$_POST['artist_name'];
$sql="update gallary_info set artname='$ARTNAME',arttype='$ARTTYPE',price='$PRICE',date_of_launch='$DATE_OF_LAUNCH',stock='$STOCK',description='$DESCRIPTION',
sample_image='$SAMPLE_IMAGES',artist_name='$ARTIST_NAME' where artid='$a_id'";
mysql_query($sql);
?>

<script>
alert("updated....");
document.location="gallery_info_view.php";
</script>