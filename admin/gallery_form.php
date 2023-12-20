<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> Gallery Form<br>
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
                    <li class="active"><a href="">Gallery</a></li>
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
<form name="formId" id="formId" method="post" action="gallery_insert.jsp">
  <table width="362" border="0">
    <tr>
      <td colspan="2">GALLERY DETAILS </td>
    </tr>
    <tr>
      <td width="162">Gallery Name</td>
      <td width="184"><input name="galleryname" type="text" id="galleryname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description      </td>
      <td><input name="description" type="text" id="description" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Artist Id </td>
      <td><input name="artistid" type="text" id="artistid" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Upload Paint </td>
      <td><input name="uploadpaint" type="text" id="uploadpaint" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Gallery Type Id </td>
      <td><select name="gtypeid" id="gtypeid">
        <option>Select Gallery Type</option>
        <%@page import="java.sql.*"%>
        <%@page import="shopping.artgallery"%>
        <jsp:useBean id="s" class="shopping.artgallery"/>
        
        <jsp:getProperty name="s" property="conn"/>      
        <%
ResultSet rs=s.st.executeQuery("select * from gtype_details");
while(rs.next())
{

%>
        <option value="<%=rs.getInt("gallery_type_id")%>"><%=rs.getString("gtype_name")%></option>
        <%
}
%>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
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

