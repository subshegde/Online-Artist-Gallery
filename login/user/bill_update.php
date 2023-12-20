<?php
include("dbconnect.php");
$t_id=$_POST['t_id'];
$USERID=$_POST['userid'];
$TOTALAMOUNT=$_POST['totalamount'];
$DISCOUNT=$_POST['discount'];
$BANKID=$_POST['bankid'];
$TOTALITEMS=$_POST['totalitems'];
$STATUS=$_POST['status'];
$BILLNO=$_POST['billno'];
 $sql="update bill set userid='$USERID',totalamount='$TOTALAMOUNT',discount='$DISCOUNT',bankid='$BANKID',totalitems='$TOTALITEMS',status='$STATUS',billno='$BILLNO' where transid='$t_id'";
mysql_query($sql);
?>

<script>
alert("updated.....");
document.location="bill_view.php";
</script>
