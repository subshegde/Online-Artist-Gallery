<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
								<style>








hr {
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title { font-size: 2em; }

h1 span {
  font-weight: 300;
  color: #Fd4;
}

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #fff200;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #ff0000; }

input.star-2:checked ~ label.star:before { color: #00ddff; }

input.star-3:checked ~ label.star:before { color: #ed07a4; }

input.star-4:checked ~ label.star:before { color: #91ff00; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> General Forms<br><small>All the elements you need!</small></h1>
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
                    <div class="block-title">
                        <h4>Rating Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('dbconnect.php') ?>
			<?php
			$g_id=$_REQUEST['g_id'];
 $sql="select * from gallery_details gd,gtype_details gt,artist_details ad where gd.gallery_type_id=gt.gallery_type_id and gd.artistId=ad.aid and gd.gid='$g_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
			?>		
<form name="formID" id="formID" method="post" action="ratings_insert.php">
<input type="hidden" name="g_id" value="<?php echo $g_id; ?>">
  <table width="797" height="433" border="0">
    <tr>
      <td colspan="4">Gallary Name :<b> <?php echo $row['Gname']; ?></b> </td>
    </tr>
    <tr>
      <td width="167">Artist Name </td>
      <td width="204"><b><?php echo $row['aname']; ?></b>&nbsp;</td>
      <td width="204">Date : </td>
      <td width="204"><b><?php echo $row['date']; ?></b>&nbsp;</td>
    </tr>
    <tr>
      <td>Gallary Type </td>
      <td><b><?php echo $row['gtype_Name']; ?></b>&nbsp;</td>
      <td>Price : </td>
      <td><b class="btn btn-info"><?php echo $row['price']; ?>.00 Rs.</b>&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="2">Photo</td>
      <td colspan="2" rowspan="2"><img src="../artist/paint_images/<?php echo $row['upload_paint'];?>" width="200" height="200" alt="image">&nbsp;</td>
      <td><div align="center">Status :<?php
	  
	  if($row['status']=='new') 
	  
	  {?>
	  
	  <p class="btn btn-success"><?php echo $row['status']; ?></p>&nbsp;</td>
	  <?php
	  }
	  else
	  {
	  
	  ?>
	  <p class="btn btn-danger"><?php echo $row['status']; ?></p>&nbsp;</td>
	  <?php
	  }
	  ?> </td>
    </tr>
    <tr>
      <td>
	  
    </tr>
    <tr>
      <td>Ratting </td>
      <td colspan="3"><div class="stars">
    
      <input name="star" type="radio" class="star star-5" id="star-5" value="5"/>
      <label class="star star-5" for="star-5"></label>
      <input name="star" type="radio" class="star star-4" id="star-4" value="4"/>
      <label class="star star-4" for="star-4"></label>
      <input name="star" type="radio" class="star star-3" id="star-3" value="3"/>
      <label class="star star-3" for="star-3"></label>
      <input name="star" type="radio" class="star star-2" id="star-2" value="2"/>
      <label class="star star-2" for="star-2"></label>
      <input name="star" type="radio" class="star star-1" id="star-1" value="1"/>
      <label class="star star-1" for="star-1"></label>
  </div>	&nbsp;</td>
      </tr>
    <tr>
      <td>Description&nbsp;:</td>
      <td colspan="3"><?php echo $row['description']; ?>&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4"><input type="submit" name="Submit" value="Submit" class="btn btn-success"></td>
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
