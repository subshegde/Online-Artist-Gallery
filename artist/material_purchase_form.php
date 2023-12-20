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
                  <div class="block-title">Material purchase form 
                    <h4><!-- General Forms Content -->
                    </h4>
                    </div>
                    <div class="block-content">

<form name="form1" method="post" action="material_purchase_insert.php" id="formID">
  <table width="780" height="379" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Material purchase </div></td>
    </tr>
    <tr>
      <td width="54">Material name </td>
      <td width="215"><select name="mid" id="mid" class="form-control validate[required]">
	  <option value="">select</option>
        <?php 
	  include('dbconnect.php');
	  $sql="select * from materials_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	   ?>
        <option value="<?php echo $row['mid'];?>"><?php echo $row['material_name'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td>Material purchase rate </td>
      <td><input name="materialpurchaserate" type="text" id="materialpurchaserate" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Material purchase date </td>
      <td><input name="materialpurchasedate" type="date" id="materialpurchasedate" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Artist name </td>
      <td><select name="aid" id="aid" class="form-control validate[required]">
	
        <?php 
		$uname=$_SESSION['uname'];
	  $sql2="select * from artist_details where user_name='$uname'";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	   ?>
        <option value="<?php echo $row2['aid'];?>"><?php echo $row2['aname'];?></option>
        <?php
	   }
	   ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Update">
        <input type="reset"  class="btn btn-danger" name="Reset" value="Reset">
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
			
			
<?php include('footer.php');  ?>>
