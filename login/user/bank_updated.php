<?php
include("dbconnect.php");
$u_id=$_POST['u_id'];
$bank_id=$_POST['bank_id'];
$bank_name=$_POST['bank_name'];
$branch_name=$_POST['branch_name'];
$creditcardnumber=$_POST['credit_card_number'];
$balance=$_POST['balance'];
$b_date=$_POST['b_date'];
$pin_number=$_POST['pin_number'];
$sql="update bank set bankid='$bank_id',bankname='$bank_name',branchname='$branch_name',creditcardnumber='$creditcardnumber',balance='$balance',date='$date',pinnumber='$pin_number' where userid='$u_id' ";
mysql_query($sql);
?>

<script>
alert("updated....");
document.location="bank_view.php";
</script>
