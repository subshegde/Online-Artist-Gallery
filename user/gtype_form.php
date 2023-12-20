
<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				               <!-- Pre Page Content -->
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
                        <h4>Gallerytype Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="formID" id="formID" method="post" action="gtype_insert.jsp">
  <table width="310" border="0">
    <tr>
      <td colspan="2">GALLERY TYPE </td>
    </tr>
    <tr>
      <td width="163">gallery type name      </td>
      <td width="131"><input name="gtypename" type="text" id="gtypename" class="validate[required,custom[onlyLetter]]"  ></td>
    </tr>
    <tr>
      <td>descrition</td>
      <td><input name="description" type="text" id="description" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="submit"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
      </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<jsp:include page="footer.jsp"></jsp:include>
