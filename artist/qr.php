    <?php 
  include "meRaviQr/qrlib.php";
  include "config.php";
  if(isset($_POST['create']))
  {
    $qc =  $_POST['qrContent'];
    $qrUname = $_POST['qrUname'];
    $qrImgName = "QR".rand();
    if($qc=="" && $qrUname=="")
    {
      echo "<script>alert('Please Enter Your Name And Msg For QR Code');</script>";
    }
    elseif($qc=="")
    {
      echo "<script>alert('Please Enter QR Code Msg');</script>";
    }
    elseif($qrUname=="")
    {
      echo "<script>alert('Please Enter Your Name');</script>";
    }
    else
    {
    $dev = " ...";
    $final = $qc.$dev;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $meravi->insertQr($qrUname,$final,$qrimage,$qrlink);
    if($insQr==true)
    {
      echo "<script>alert('Thank You $qrUname. Success Create Your QR Code'); window.location='1.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }
 }
  ?>
  