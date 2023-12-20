

<?php include('dbconnect.php');


$gid=$_POST['galleryid'];
$gtypename=$_POST['gtypename'];
$descp=$_POST['description'];

//$sql="select * from gtype_details where gtype_Name='$gtypename'";
//$res=$conn->query($sql);
//if($row=mysqli_fetch_array($res))
//{
?>

<script>
//alert("Already Exist");
//history.back();
</script>
<?php
//}
//else
//{

$sql="insert into Gtype_Details values(null,'$gtypename','$descp')";
$conn->query($sql);
?>

<script>
alert("Record Is Inserted..");
document.location="viewgtype_details.php";
</script>
<?php

//}
?>