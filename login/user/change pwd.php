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
                        <h4>Artist Info</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
						
						<?php include('val.php'); ?>
						
					<form name="form2" method="post" action="changepin.php">
<p>Old Password </p>
  <label>
  <input type="text" name="old_pwd">
  </label>
  <p>New password </p>
  <p>
    <label>
      <input type="text" name="new_pwd">
      </label>
	  <p>Confirm password </p>
  <p>
    <label>
      <input type="text" name="conf_pwd">
      </label>
  </p>


  <label>
  <input type="submit" name="Submit" value="Change" />
  </label>
</form>
  </div>
                    <!-- END General Forms Content -->
              </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include("footer.php"); ?>
