<?php
include("dbconnect.php");
$TRANSID=$_POST['transid'];
$USERID=$_POST['userid'];
$TOTALAMOUNT=$_POST['totalamount'];
$DISCOUNT=$_POST['discount'];
$BANKID=$_POST['bankid'];
$TOTALITEMS=$_POST['totalitems'];
$STATUS=$_POST['status'];
$BILLNO=$_POST['billno'];
$sql="insert into bill values('$TRANSID','$USERID','$TOTALAMOUNT','$DISCOUNT','$BANKID','$TOTALITEMS','$STATUS','$BILLNO')";
mysql_query($sql);
?>

<script>
alert("inserted.....");
document.location="bill_form.php";
</script>
