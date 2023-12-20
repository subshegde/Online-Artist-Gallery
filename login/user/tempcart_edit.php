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
                        <h4>Temporary Card Edit</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<?php 
include("dbconnect.php");
$t_id=$_REQUEST['t_id'];
$sql="select * from tempcart where transid='$t_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>
<?php include("val.php");?>
<form name="formID" id="formID" method="post" action="tempcard_update.php">
<input type="hidden" name="t_id" value="<?php echo $row['transid'];?>">
  <table width="309" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>TAMPORARY_CARD</strong></div></td>
    </tr>
    <tr>
      <td width="149"><strong>TRANSACTION_ID</strong></td>
      <td width="144"><input name="transid" type="text" id="transid" value="<?php echo $row['transid'];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>USER_ID</strong></td>
      <td><select name="userid" id="userid">
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
      <td><strong>CATAGERY_ID</strong></td>
      <td><input name="catid" type="text" id="catid" value="<?php echo $row['catid'];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>PRODUCT_ID</strong></td>
      <td><input name="prodid" type="text" id="prodid" value="<?php echo $row['prodid'];?>"class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>UNIT_PRICE</strong></td>
      <td><input name="unitprice" type="text" id="unitprice" value="<?php echo $row['unitprice'];?>"class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>QUENTITY</strong></td>
      <td><input name="qty" type="text" id="qty" value="<?php echo $row['qty'];?>"class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><strong>DATE</strong></td>
      <td><input name="date" type="text" id="date" value="<?php echo $row['date'];?>"class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td><strong>STATUS</strong></td>
      <td><input name="status" type="text" id="status" value="<?php echo $row['status'];?>" class="validate[required,custom[onlyNumber]]"></td>
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
