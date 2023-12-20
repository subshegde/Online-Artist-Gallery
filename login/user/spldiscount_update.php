<?php
include("dbconnect.php");
$c_id=$_POST['c_id'];
$companyid=$_POST['companyid'];
$catid=$_POST['catid'];
$prodid=$_POST['prodid'];
$spldiscountamt=$_POST['spldiscountamt'];
$sql="update spldiscount set companyid='$companyid',catid='$catid',prodid='$prodid',spldiscountamt='$spldiscountamt'  where companyid='$c_id'";
mysql_query($sql);
?>

<script>
alert("updated.....");
document.location="spldiscount_view.php";
</script>
