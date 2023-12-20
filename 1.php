<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>
     
    <input type="text" value="<?php echo $qrlink; ?>" readonly>

     </div></div>
  <?php
}
else
{
  ?>
<form name="form1" method="post" action="qr.php">
  <p>name 
    <input name="qrUname" type="text" id="qrUname">
</p>
  <p>Last Name
    <input name="qrContent" type="text" id="qrContent"> 
  </p>
  <p>
    <input type="submit" name="create" value="Submit">
</p>
</form>
    <?php 
}
   ?>
</body>
</html>
