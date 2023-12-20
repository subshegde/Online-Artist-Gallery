<?php
 include('dbconnect.php'); 

$mid=$_POST['mid'];
$materialname=$_POST['materialname'];
$materialdescription=$_POST['materialdescription'];


$sql="update materials_details set material_name='$materialname',material_description='$materialdescription' where mid='$mid'";
mysqli_query($conn,$sql);
?>

<script>
alert(" Material details updated");
document.location="material_details_view.php";
</script>