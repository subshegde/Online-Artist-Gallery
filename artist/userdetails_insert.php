 <?php include('dbconnect.php') ?>	
<?php

$uid=$_POST['userid'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$addr=$_POST['addrs'];
$contno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$username=$_POST['username'];
$sql="insert into User_Details values(null,'$fname','$lname','$addr','$contno','$emailid','$username')";
$conn->query($sql);
?> 

<script>
alert("Record Is Inserted..");
document.location="viewuserdetails.php";
</script>