<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<table width="489" height="141" border="1">
  <tr>
    <td>Id</td>
    <td>Uname</td>
    <td>Contant</td>
    <td>Link</td>
    <td>More</td>
  </tr>
  <?php 
$con=mysql_connect('localhost','root','');
mysql_select_db('howtoqr',$con);

$sql="select * from qrcodes";
$res=$conn->query($sql);
while($row=mysql_fetch_array($res))
{

?>
  <tr>
    <td>&nbsp;<?php echo $row['id'];?></td>
    <td>&nbsp;<?php echo $row['qrUsername'];?></td>
    <td>&nbsp;<?php echo $row['qrContent'];?></td>
    <td>&nbsp;<?php echo $row['qrlink'];?></td>
    <td>&nbsp;<a href="show.php?id=<?php echo $row['id'];?>">QR Show</a></td>
  </tr>
  <?php 
  }
  ?>
</table>
</body>
</html>
