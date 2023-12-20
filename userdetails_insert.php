
<?php
include('dbconnect.php');

?>

<?php
$uid=$_POST['userid'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$addr=$_POST['addrs'];
$contno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$username=$_POST['username'];
//$password=md5($_POST['password']);
$password=$_POST['password'];
$card_no=$_POST['card_no'];
$pin_no=$_POST['pin_no'];




//$sql="select * from login where  user_name='$username'";
//$res=$conn->query($sql);
//if($row=mysqli_fetch_array($res))
//{
?>
 

<script>
//alert("username Already Exist");
//history.back();
</script>
<?php

//}
//else
//{

$sql="insert into User_Details(firstname,lastname,address,contno,email_id,user_name) values('$fname','$lname','$addr','$contno','$emailid','$username')";
$conn->query($sql);

 $sql1="insert into login values('$username','$password','user','Enetr Your Email ID','$emailid','active')";
$conn->query($sql1);
?> 
 

<script>
alert("Record Is Inserted..");
document.location="login/index.html";
</script>
<?php
//}
?>