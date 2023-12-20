<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Retings Forms<br><small>All the elements you need!</small></h1>
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
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
     String ri=request.getParameter("Rid");
	 ResultSet rs=s.st.executeQuery("select * from Ratings where Rid="+ri+" ");
	 rs.next();
%>
<body>
<form name="formID" id="formID" method="post" action="edit_ratings2.jsp">
  <table width="337" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">RATINGS</div></td>
    </tr>
    <tr>
      <td width="167">Rating Id </td>
      <td width="204"><input name="ratingid" type="text" id="ratingid" value="<%=rs.getInt("Rid")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Gallery Id      </td>
      <td><input name="galleryid" type="text" id="galleryid" value="<%=rs.getString("Gid")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><input name="username" type="text" id="username" value="<%=rs.getString("UserName")%>"  class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Rating</td>
      <td><input name="ratings" type="text" id="ratings" value="<%=rs.getString("Ratings")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="text" id="date" value="<%=rs.getString("Date")%>"  class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="Submit" value="Update"></td></tr>
  </table>
</form>
      </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<jsp:include page="footer.jsp"></jsp:include>
