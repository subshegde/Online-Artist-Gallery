<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Artist Form<br>
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
                    <li class="active">Artist</li>
              </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>ARTIST DETAILS </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">



<form name="formID" id="formID" method="post" action="artistdetails_insert.jsp">
  <table width="405" border="0">
    <tr>
      <td colspan="2">ARTIST DETAILS </td>
    </tr>
    <tr>
      <td width="131">Artist Name</td>
      <td width="94"><input name="aname" type="text" id="aname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Work Exp</td>
      <td><input name="workexp" type="text" id="workexp"class="validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td>Award Own </td>
      <td><input name="awardwin" type="text" id="awardwin" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address      </td>
      <td><textarea name="addrs" id="addrs" class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="emailid" type="text" id="emailid" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contno" type="text" id="contno" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><input name="username" type="text" id="username" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" class="btn btn-success" value="Submit"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
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