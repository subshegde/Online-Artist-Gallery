<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<?php 
$con=mysql_connect('localhost','root','');
mysql_select_db('howtoqr',$con);
$id=$_REQUEST['id'];
$sql="select * from qrcodes where id='$id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>


<body>
<table width="320" height="184" border="1">
  <tr>
    <td colspan="4"><div align="center">QR Code </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2"><img src="userQr/<?php echo $row['qrImg'];?>" >&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><?php echo $row['qrlink']; ?>&nbsp;</td>
  </tr>
</table>
</body>
</html>
