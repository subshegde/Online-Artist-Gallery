<?php
 include('dbconnect.php'); 
$materialname=$_POST['materialname'];
$materialdescription=$_POST['materialdescription'];


$sql="insert into materials_details values(null,'$materialname','$materialdescription')";
mysqli_query($conn,$sql);
?>

<script>
alert(" Material details inserted successfully");
document.location="material_details_view.php";
</script>