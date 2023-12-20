<?php
include("dbconnect.php");
$transid=$_POST['transid'];
$userid=$_POST['userid'];
$catid=$_POST['catid'];
$prodid=$_POST['prodid'];
$unitprice=$_POST['unitprice'];
$qty=$_POST['qty'];
$date=$_POST['date'];
$status=$_POST['status'];
$sql="insert into tempcart values('$transid','$userid','$catid','$prodid','$unitprice','$qty','$date','$status')";
mysql_query($sql);
?>

<script>
alert("inserted.....");
document.location="tempcart_form.php";
</script>
