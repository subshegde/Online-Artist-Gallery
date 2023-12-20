<?php session_start(); ?>
<?php include('dbconnect.php') ?>

<?php


 $uid=$_POST['uid'];
  $galleryid=$_POST['galleryid'];
   $amount=$_POST['amount'];
    $dat=$_POST['dat'];
	 $contno=$_POST['contno'];


echo $sql1="insert into payments value(null,'$uid','$galleryid','$amount','$dat','".$_POST['razorpay_payment_id']."','".$_POST['razorpay_order_id']."','".$_POST['razorpay_signature']."','','Amount Is Transferd')";
$conn->query($sql1);

$sql2="update gallery_details set status='Sold' where gid='$galleryid'";
$conn->query($sql2);
?>


<script>
alert("You have Payment Successfully");


document.location="view_payments.php";
</script>
