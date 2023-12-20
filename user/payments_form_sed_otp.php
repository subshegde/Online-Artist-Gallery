<?php session_start(); ?>
<?php include('dbconnect.php') ?>

<?php


 $uid=$_POST['uid'];
 $gid=$_POST['galleryid'];
 $bankname=$_POST['bankname'];
 $card_no=$_POST['card_no'];
 $pin_no=$_POST['pin_no'];
 $bankname=$_POST['bankname'];
 $amt=$_POST['amount'];
 $date=$_POST['date'];
 $email_id=$_POST['email_id'];



$uname=$_SESSION["uname"];
$sql="select * from bank where user_name='$uname' and card_no='$card_no'";
$res=$conn->query($sql);
if($row=mysqli_fetch_array($res))
{
$pin=$row["pin_no"];
if($pin==$pin_no)
{

		echo $sql3="select * from user_details where user_name='$uname' and email_id='$email_id' ";
  		 $res3=$conn->query($sql3);
		$row3=mysqli_fetch_array($res3);
  		echo  $mob=$row3["contno"];


$gpin = rand(1000,9999); 


 $msg1="Your verification OTP is $gpin Please  verify by entering this OTP";
$msg=str_replace(' ','+', $msg1);
file_get_contents("http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$mob."&text=".$msg."&route=6");


//header('location:payments_form_otp.php');
?>
<form method="post" id="myform" action="payments_form_otp.php">
<input type="hidden" name="uid" value="<?php echo $uid; ?>">
<input type="hidden" name="galleryid" value="<?php echo $gid; ?>">
<input type="hidden" name="bankname" value="<?php echo $bankname; ?>">
<input type="hidden" name="card_no" value="<?php echo $card_no; ?>">
<input type="hidden" name="pin_no" value="<?php echo $pin_no; ?>">
<input type="hidden" name="amount" value="<?php echo $amt; ?>">

<input type="hidden" name="date" value="<?php echo $date; ?>">
<input type="hidden" name="gpin" value="<?php echo $gpin; ?>">


</form>
<script type="text/javascript">
  document.getElementById("myform").submit();
</script>
  
<?php
}
else
{
?>
<script>
alert("Invalid Pin No");
history.back();
</script>
<?php
}
}
else
{
?>
<script>
alert("Invalid Card No");
history.back();
</script>
<?php
}
?> 

