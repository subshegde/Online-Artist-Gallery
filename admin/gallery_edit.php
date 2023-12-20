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
                        <h4>Gallery Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
     String Gid=request.getParameter("Gid");
	 ResultSet rs=s.st.executeQuery("select * from Gallery_Details where Gid="+Gid+" ");
	 rs.next();
%>
<body>
<form name="formID" id="formID" method="post" action="edit_gallery1.jsp">
  <table width="362" border="0">
    <tr>
      <td colspan="2">GALLERY DETAILS </td>
    </tr>
    <tr>
      <td width="162">Gallery id </td>
      <td width="184"><input name="gid" type="text" id="gid" value="<%=rs.getInt("Gid")%>"""></td>
    </tr>
    <tr>
      <td>Gallery 
        
      Name</td>
      <td><input name="galleryname" type="text" id="galleryname" value="<%=rs.getString("Gname")%>" class="validate[required,custom[onlyLetter]]"  ></td>
    </tr>
    <tr>
      <td>Description      </td>
      <td><input name="description" type="text" id="description" value="<%=rs.getString("Description")%>" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Artist id </td>
      <td><input name="artistid" type="text" id="artistid" value="<%=rs.getInt("ArtistId")%>"  class="validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td>upload paint </td>
      <td><input name="uploadpaint" type="text" id="uploadpaint" value="<%=rs.getString("upload_Paint")%>"  class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>date</td>
      <td><input name="date" type="text" id="date" value="<%=rs.getString("Date")%>"  class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>gallery type id </td>
      <td><input name="gtypeid" type="text" id="gtypeid" value="<%=rs.getInt("Gallery_Type_id")%>" class="validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="update"></td>
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
