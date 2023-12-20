<?php

include('../db_connection/dbconnect.php'); 
 $t_id=$_REQUEST['t_id'];
 
 $sql="select * from payment_details where t_id='$t_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="payment_details_update.php">
<input type="hidden" value="<?php echo $row['t_id'];?>" name="t_id">
  <p align="center">Payment Details</p>
  <table width="200" border="1" align="center">
    <tr>
      <td>User Id </td>
      <td><input name="uid" type="text" id="uid"></td>
    </tr>
    <tr>
      <td>Gallery Id </td>
      <td><input name="gid" type="text" id="gid"></td>
    </tr>
    <tr>
      <td>Bank Name </td>
      <td><input name="bank_name" type="text" id="bank_name"></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amt" type="text" id="amt"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="p_date" type="text" id="p_date"></td>
    </tr>
    <tr>
      <td>Payment Status </td>
      <td><input name="p_status" type="text" id="p_status"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
  <p>&nbsp;  </p>
</form>
</body>
</html>


