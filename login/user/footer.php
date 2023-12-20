
            <!-- Footer -->
            <footer>
                <div class="pull-right">
                    Developed <i class="icon-user"></i> by <strong><a href="#" target="_blank">Vinay and Nikunj</a></strong>
                </div>
                <div class="pull-left">
                    <span >2017-2018</span> &copy; <strong><a href="#" target="_blank">Art Gallery</a></strong>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="icon-chevron-up"></i></a>

        <!-- User Modal Account, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
        <div id="modal-user-account" class="modal hide fade">
            <!-- Modal Body -->
            <div class="modal-body remove-padding">
                <!-- Modal Tabs -->
                <div class="block-tabs">
                    <div class="block-options">
                        <a href="javascript:void(0)" class="btn btn-danger" data-dismiss="modal"><i class="icon-remove"></i></a>
                    </div>
                    <ul class="nav nav-tabs" data-toggle="tabs">
                        <li class="active"><a href="#modal-user-account-account"><i class="icon-cog"></i> Account</a></li>
                        <li><a href="#modal-user-account-profile"><i class="icon-user"></i> Profile</a></li>
						<li><a href="#modal-user-account-profile1"><i class="icon-user"></i> Profile</a></li>
                    </ul>
                   
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal"><i class="icon-save"></i> Save</button>
            </div>
            <!-- END Modal footer -->
        </div>
        <!-- END User Modal Settings -->

        <!-- Excanvas for Flot (Charts plugin) support on IE8 -->
        <!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Get Jquery library from Google ... -->
       
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!--
        Include Google Maps API for global use.
        If you don't want to use  Google Maps API globally, just remove this line and the gmaps.js plugin from js/plugins.js (you can put it in a seperate file)
        Then iclude them both in the pages you would like to use the google maps functionality
        -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
    </body>
</html>