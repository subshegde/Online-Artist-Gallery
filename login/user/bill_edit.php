<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				               <!-- Pre Page Content -->
				               
				               
            <div id="pre-page-content">
              <h1><!-- Page Content -->
            </h1>
            </div>
            <div id="page-content">
              <!-- END Breadcrumb -->
              <!-- General Forms Block -->
<div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Bill Edit</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<?php
include("dbconnect.php");
$t_id=$_REQUEST['t_id'];
$sql="select * from bill where transid='$t_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<?php include("val.php")?>;
<form name="formID" id="formID" method="post" action="bill_update.php">
<input type="hidden" name="t_id" value="<?php echo $row['transid']; ?>">
  <table width="300" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>BILL</strong></div></td>
    </tr>
    <tr>
      <td width="126"><strong>USERID</strong></td>
      <td width="158"><select name="userid" id="userid">
        <option selected>select </option>
        <?php
		$sql1="select * from  bank";
		$res1=mysql_query($sql1);
		while($row1=mysql_fetch_array($res1))
		{ 
		?>
        <option value="<?php echo $row1['userid'];?>"<?php if($row1['userid']==$row['userid']){echo "selected";} ?> > <?php echo $row1['bankname']; ?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><strong>TOTALAMOUNT</strong></td>
      <td><input name="totalamount" type="text" id="totalamount" value="<?php echo $row["totalamount"];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DISCOUNT</strong></td>
      <td><input name="discount" type="text" id="discount" value="<?php echo $row["discount"];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>BANKID</strong></td>
      <td><input name="bankid" type="text" id="bankid" value="<?php echo $row["bankid"];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>TOTALITEMS</strong></td>
      <td><input name="totalitems" type="text" id="totalitems" value="<?php echo $row["totalitems"];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>STATUS</strong></td>
      <td><input name="status" type="text" id="status" value="<?php echo $row["status"];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>BILLNO</strong></td>
      <td><input name="billno" type="text" id="billno" value="<?php echo $row["billno"];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
</form>
</div>
                    <!-- END General Forms Content -->
              </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include("footer.php"); ?>
