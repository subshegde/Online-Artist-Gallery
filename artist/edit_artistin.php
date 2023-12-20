 <?php include('dbconnect.php') ?>

<?php

$aid=$_POST['aid'];
$aname=$_POST['aname'];
$workexp=$_POST['workexp'];
$awardwinning=$_POST['awardwin'];
$addrs=$_POST['addrs'];
$emailid=$_POST['emailid'];
$contno=$_POST['contno'];

 $sql="update artist_details set aname='$aname',workexperience='$workexp',awardwin='$awardwinning',aaddress='$addrs',email_id='$emailid',contno='$contno' where aid='$aid' ";
$conn->query($sql);
?> 

<script>
alert("Record Is updated..");
document.location="edit_artistf.php";
</script>