<?php include('metatag.php');  ?>
<?php include('header.php');  ?>
<?php include('sidebar.php');  ?>
				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">Payment Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Payment Details</h4>
                  
         <!-- Table Options -->
                <!-- END Table Options -->
				<?php include('cal.php');?>
				  <form name="form1" method="post" action="view_payments_new.php">
			    <table width="968" border="0">
  <tr>
    <td width="139">From Date: </td>
    <td width="255"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    <td width="161">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date :
&nbsp;&nbsp;&nbsp;</td>
    <td width="350"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    <td width="249"><input type="submit" name="Submit" class="btn btn-primary" value="SEARCH"></td>
  </tr>
</table>		  
			  </form>
			  <?php 
			  $date1=$_POST['date1'];
			  $date2=$_POST['date2'];
			   ?>
			  <h5>From Date : <font color="#003399"><?php echo $date1; ?> </font>&nbsp;&nbsp; To Date: <font color="#003399"><?php echo $date2?></font></h5>
         
				
<table class="table table-bordered table-hover">
<thead>
  <tr>
    <th>Purchase No</th>
    <th>User Name</th>
    <th>Aritist</th>
    <th>Gellery Name</th>

    <th>Paid Amount</th>
    <th>Paid Date</th>

    <th>Status</th>
  </tr>
  </thead>
  <tbody>
     <?php include('dbconnect.php') ?>
<?php
$uname=$_SESSION['uname'];

$tot=0;
//$sql="select * from payments p,user_details ud,gallery_details gd,artist_details ad where p.uid=ud.uid and p.gid=gd.gid and gd.artistId=ad.aid and ad.user_name='$uname' ";
$s1=1;
$tot-0;
$sql=" select * from user_details ud,gallery_details gd,payments p,artist_details ad where p.uid=ud.uid and p.gid=gd.gid  and ad.user_name='$uname' and p.date  between '$date1' and '$date2' ";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$pid=$row["pid"];
$tot=$tot+$row['amt'];
?>
  <tr>
    <td>&nbsp;<?php echo $s1++; ?></td>
    <td>&nbsp;<?php echo $row['firstname']; ?></td>
    <td><?php echo $row['aname']; ?></td>
    <td>&nbsp;<?php echo $row['Gname']; ?></td>
    
    <td>&nbsp;<?php echo $row['amt']; ?></td>
    <td>&nbsp;<?php echo $row['date']; ?></td>
    <?php
	$p_status=$row['p_status'];

	if($p_status=="Amount Is Transferd")
	{
	?>
    <td><a href="accept_payments.php?Pid=<?php echo $pid; ?>&uid=<?php echo $row['uid']; ?>" class="btn btn-warning">Accept</a></td>
<?php
}
else
{
?>
<td><p class="btn btn-info">Painting Sent To User</p></td>
<?php
}
?>
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
  <strong>Total paid Amount : <?php echo $tot;?></strong>
  </div> 

            <!-- END Page Content -->
			
			 <script src="js/helpers/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

       
    </body>
</html>
 <?php include('footer.php');  ?>

