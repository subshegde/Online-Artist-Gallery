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
                  <div class="block-title">Material purchase edit 
                    <h4><!-- General Forms Content -->
                    </h4>
                    </div>
                    <div class="block-content">
<?php
include('val.php');
?>
<?php
include('dbconnect.php');
$mpid=$_REQUEST['mpid'];
$sql="select * from material_purchase where mpid='$mpid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form name="form1" method="post" action="material_purchase_update.php" id="formID">
<input type="hidden" value="<?php echo $row['mpid'];?>" name="mpid">
  <table width="285" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Material purchase </div></td>
    </tr>
    <tr>
      <td width="54">Material name </td>
      <td width="215"><select name="mid" id="mid" class="form-control validate[required]">
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
      <td>Material purchase rate </td>
      <td><input name="materialpurchaserate" type="text" id="materialpurchaserate" value="<?php echo $row['material_purchase_rate'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Material purchase date </td>
      <td><input name="materialpurchasedate" type="date" id="materialpurchasedate" value="<?php echo $row['material_purchase_date'];?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Artist name </td>
      <td><select name="aid" id="aid" class="form-control validate[required]">
	  <option value="">select</option>
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
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
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
