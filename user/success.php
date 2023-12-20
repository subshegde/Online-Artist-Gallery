<?php
include'../dbconnect.php';
 //'<pre>'; print_r($_POST);
 $ep_id=$_POST['ep_id'];
$dat=date('Y-m-d');
echo  $sql="update enquiries_pay set paid_date='$dat',payment_id='".$_POST['razorpay_payment_id']."',order_id='".$_POST['razorpay_order_id']."',signature_hash='".$_POST['razorpay_signature']."',ep_status='Paid' where ep_id ='$ep_id'";
mysqli_query($con,$sql);
?>
<script>
alert("You have Payment Successfully");


document.location="paymentt_requests.php";
</script>