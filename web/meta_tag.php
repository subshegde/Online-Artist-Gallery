<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset2.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style2.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_122.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider2.css">
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min2.js"></script>
<script src="js/jquery.easing.1.32.js"></script>
<script src="js/tms-0.4.12.js"></script>
<script>
$(document)
    .ready(function () {
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>