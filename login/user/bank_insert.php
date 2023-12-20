<?php
include("dbconnect.php");
$bank_id=$_POST['bank_id'];
$bank_name=$_POST['bank_name'];
$branch_name=$_POST['branch_name'];
$creditcardnumber=$_POST['credit_card_number'];
$balance=$_POST['balance'];
$date=$_POST['date'];
$pin_number=$_POST['pin_number'];
$sql="insert into bank values(null,'$bank_id','$bank_name','$branch_name','$creditcardnumber','$balance','$date','$pin_number')";
mysql_query($sql);
?>

<script>
alert("Inserted....");
document.location="bankform.php";
</script>
