<?php
include("dbconnect.php");
$companyid=$_POST['companyid'];
$catid=$_POST['catid'];
$prodid=$_POST['prodid'];
$spldiscountamt=$_POST['spldiscountamt'];
$sql="insert into spldiscount values('$companyid','$catid','$prodid','$spldiscountamt')";
mysql_query($sql);
?>

<script>
alert("inserted.....");
document.location="spldiscount_form.php";
</script>
