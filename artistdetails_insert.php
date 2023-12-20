<?php
include('dbconnect.php');
//include("config.php");
?>
<?php

$aid=$_POST['aid'];
$aname=$_POST['aname'];
$workexp=$_POST['workexp'];
$awardwinning=$_POST['awardwin'];
$addrs=$_POST['addrs'];
$emailid=$_POST['emailid'];
$contno=$_POST['contno'];
$username=$_POST['username'];
$password=$_POST['password'];


//$sql="select * from artist_details where email_id='$emailid' or user_name='$username'";
//$res=$conn->query($sql);
//if($row=mysqli_fetch_array($res))
//{
?> 

<script>
//alert("Email id already exist");
//history.back();
</script>
<?php

//}
//else
//{
$sql="insert into artist_details  values(null,'$aname','$workexp','$awardwinning','$addrs','$emailid','$contno','$username')";
$conn->query($sql);
$sql1="insert into login values('$username','$password','artist','Enetr Your Email ID','$emailid','active')";
$conn->query($sql1);
?> 

<script>
alert("Record Is Inserted");
document.location="login/index.html";
</script>
<?php
//}
?>