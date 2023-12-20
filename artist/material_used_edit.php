<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery Type Form<br>
              <small>All the elements you need!</small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">General</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                  <div class="block-title">Material used edit 
                    <h4><!-- General Forms Content -->
                    </h4>
                    </div>
                    <div class="block-content">
<?php
include('val.php');
?>
<?php
include('dbconnect.php');
$muid=$_REQUEST['muid'];
$sql="select * from material_used where muid='$muid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>
<form name="form1" method="post" action="material_used_update.php" id="formID">
<input type="hidden" value="<?php echo $row['muid'];?>" name="muid">
  <table width="200" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Material used </div></td>
    </tr>
    <tr>
      <td>Material name </td>
      <td><select name="mid" id="mid" class="form-control validate[required]">
	  	  <option value="">select</option>

	  <?php 
	  $sql1="select * from materials_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	   ?>
        <option value="<?php echo $row1['mid'];?>"<?php if($row1['mid']==$row['mid']){?>selected<?php }?>><?php echo $row1['material_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" value="<?php echo $row['quantity'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Used date </td>
      <td><input name="useddate" type="date" id="useddate" value="<?php echo $row['used_date'];?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Artist name </td>
      <td><select name="aid" id="aid" class="form-control validate[required]">
	  <?php 
	  $sql2="select * from artist_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	   ?>
        <option value="<?php echo $row2['aid'];?>"<?php if($row2['aid']==$row['aid']){?>selected<?php }?>><?php echo $row2['aname'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Update">
        <input name="Reset" class="btn btn-danger" type="reset" value="Reset">
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
			
			
<?php include('footer.php');  ?>
