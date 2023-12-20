<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Online Art Gallery</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Estate Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>
			 <?php
include('../dbconnect.php');
 $uname=$_REQUEST["username"];
//echo $uname;
 $sql="select * from login where binary(user_name)='$uname'";
//echo $sql;
$res=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($res))
{
    $hintqtn=$row["hintquest"];
	$hintans=$row["hintans"];
	$pwd=$row["password"];
?>

<div class="signupform">
	<h1> Modern Art Wing</h1>
	&nbsp;
		<div class="container">
			<!-- main content -->
			<div class="agile_info">
				<div class="w3l_form">
					<div class="left_grid_info">
						<img src="images/10.jpg" alt="" />
					</div>
				</div>
				<div class="w3_info">
					<h2>Login Account</h2>
					<p class="style2">  Enter Hint Answer
    </p>
	<p><span class="style2">Hint Question</span>:<p class="style2"> <?php echo " ".$hintqtn; ?></p>
					&nbsp;
						<form action="../getpwd.php" method="post">
							<div class="input-group">
								<span><i class="fa fa-user" ></i></span>
								<input name="type_ans" type="text" id="type_ans" placeholder="Hint Ansaner" required="">
</div>
							
							        <input name="db_hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">
                              <input name="password" type="hidden" id="password" value="<?php echo $pwd; ?>">
								<button class="btn btn-danger btn-block" type="submit">LOGIN</button >                
						</form>
					<p class="account"><a href="../userdetails_form.php" >New User Register / Sign up</a> </p>
					<p class="account"><a href="../artist_form.php" >New Artist Register</a> </p>
					<p class="account"><a href="#" >Forgot Password</a> </p>
				</div>
			</div>
			<!-- //main content -->
		</div>
		<!-- footer -->
		<div class="footer">
			<p>&copy; 2021 Modern Art Wing. All Rights Reserved | Devoloped by <a href="#" target="blank">Anita Warad</a></p>
		</div>
		<!-- footer -->
</div>
	<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username");
//document.location="login.php";
</script>
<?php
}
?>
</body>
</html>