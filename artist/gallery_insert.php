
<?php session_start(); ?>
<?php include('dbconnect.php'); ?>
<?php


$gname=$_POST['galleryname'];
$_SESSION["gallery_name"]=$gname;
$description=$_POST['description'];
$aid=$_POST['artistid'];
$uploadpaint=$_POST['uploadpaint'];
$date=$_POST['date'];
$gtypeid=$_POST['gtypeid'];
$price=$_POST['price'];

$photo=$_FILES["photo"]['name'];
$tmp_location=$_FILES["photo"]["tmp_name"];
$target="paint_images/".$photo;
move_uploaded_file($tmp_location,$target);


 $sql="insert into gallery_details values(null,'$gname','$description','$aid','$photo','$date','$gtypeid','$price','new')";
$conn->query($sql);
?>


<script>
alert("Gallery Record Is Inserted..");
document.location="viewgallery_details.php";
</script>