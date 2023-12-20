<?php include('dbconnect.php') ?>

<?php
$uid=$_REQUEST['uid'];
$sql1="select * from user_details where uid='$uid'  ";
$res1=$conn->query($sql1);
$row1=mysqli_fetch_array($res1);
echo $mob=$row1['contno'];

$Pid=$_REQUEST['Pid'];
 $sql="update  payments set p_status='Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address' where pid='$Pid' ";
$conn->query($sql);


 $msg1="Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address";
$msg=str_replace(' ','+', $msg1);
 $sms_api="http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$mob."&text=".$msg."&route=6";
file_get_contents($sms_api);

?>



<script>
alert("Ur Payment is Accepted...");
document.location="view_payments.php";
</script>