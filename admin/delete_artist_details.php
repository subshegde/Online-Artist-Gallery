<?php include('dbconnect.php') ?>

<?php 
$Aid=$_REQUEST['Aid'];

$sql="delete from Artist_Details where Aid='$Aid' ";
$conn->query($sql);

?>
<script>
alert("Deleted...");
document.location="viewartist_details.php";
</script>