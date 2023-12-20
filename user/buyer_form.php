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
                        <h4>Buyer DETAILS </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">



<form name="formID" id="formID" method="post" action="buyer_insert.jsp">
  <table width="336" border="0">
    <tr>
      <td colspan="2">BUYER DETAILS</td>
    </tr>
    <tr>
      <td width="137">Bname</td>
      <td width="183"><input name="bname" type="text" id="bname"  class="validate[required,custom[onlyLetter]]">
      </td>
    </tr>
    <tr>
      <td>Baddr</td>   
      <td><textarea name="baddr" id="baddr" class="validate[required]" ></textarea></td>
    </tr>
    <tr>
      <td>Bcity</td>
      <td><input name="bcity" type="text" id="bcity" class="validate[required,custom[onlyLetter]]" >
      </td>
    </tr>
    <tr>
      <td>contactno</td>
      <td><input name="contactno" type="text" id="contactno" class="validate[required,custom[onlyNumber]]">
      </td>
    </tr>
    <tr>
      <td>emailid </td>
      <td><input name="emailid" type="text" id="emailid" class="validate[required]]">
      </td>
    </tr>
    <tr>
      <td>workst</td>
      <td><input name="workst" type="text" id="workst" class="validate[required,custom[onlyLetter]]">
      </td>
    </tr>
    <tr>
      <td>username</td>
      <td><input name="username" type="text" id="username" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" class="btn btn-success" value="Submit"></td>
      <td><p>&nbsp;
      </p>
      </td>
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
