<?php
include("dbconnect.php");
$t_id=$_POST['t_id'];
$transid=$_POST['transid'];
$userid=$_POST['userid'];
$catid=$_POST['catid'];
$prodid=$_POST['prodid'];
$unitprice=$_POST['unitprice'];
$qty=$_POST['qty'];
$date=$_POST['date'];
$status=$_POST['status'];
$sql="update tempcart set transid='$transid',userid='$userid',catid='$catid',prodid='$prodid',unitprice='$unitprice',qty='$qty',date='$date',status='$status' where transid='$t_id'";
mysql_query($sql);
?>

<script>
alert("updated.....");
document.location="tempcart_view.php";
</script>
