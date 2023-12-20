<?php
include("dbconnect.php");

$ARTNAME=$_POST['artname'];
$ARTTYPE=$_POST['arttype'];
$PRICE=$_POST['price'];
$DATE_OF_LAUNCH=$_POST['date'];
$STOCK=$_POST['stock'];
$DESCRIPTION=$_POST['discription'];
$SAMPLE_IMAGES=$_POST['sample_image'];
$ARTIST_NAME=$_POST['artist_name'];
$sql="insert into gallary_info values(null,'$ARTNAME','$ARTTYPE','$PRICE','$DATE_OF_LAUNCH','$STOCK','$DESCRIPTION','$SAMPLE_IMAGES','$ARTIST_NAME')";
mysql_query($sql);
?>

<script>
alert("Inserted....");
document.location="gallery_info_form.php";
</script>