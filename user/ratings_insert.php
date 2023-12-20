

<?php include('dbconnect.php') ?>

<?php


$gid=$_POST['g_id'];
$ratings=$_POST['star'];

//int ratings=Integer.parseInt(rating);


$sql="select * from ratings where gid='$gid' ";
$res=$conn->query($sql);
if($row=mysqli_fetch_array($res))
{
$rat=$row['ratings'];

$user_ratings=$rat+$ratings;
 $sql1="update  ratings set ratings='$user_ratings' where gid='$gid' ";
$conn->query($sql1);
}
else
{
 $sql2="insert into  ratings(gid,ratings) values('$gid','$ratings') ";
$conn->query($sql2);
}
?>

<script>
alert("Rating Is Added..");
document.location="gallary_rating_view.php";
</script>