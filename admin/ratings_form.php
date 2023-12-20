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
                        <h4>Rating Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="formID" id="formID" method="post" action="ratings_insert.jsp">
  <table width="337" border="0">
    <tr>
      <td colspan="2">RATINGS</td>
    </tr>
    <tr>
      <td width="167">Select Gallery</td>
      <td width="204"><select name="galleryid" id="galleryid">
        <option>Select Gallery</option>
		  <%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
		<%
							ResultSet rs=s.st.executeQuery("select * from gallery_details");
							while(rs.next())
								{
								%>
								<option value="<%=rs.getInt("gid")%>"><%=rs.getString("gname")%></option>
								<%
								}
								%>
      </select></td>
    </tr>
    <tr>
      <td>Select Rating</td>
      <td><select name="ratings" id="ratings">
        <option>Select Ratings</option>
        <option value="2">*</option>
        <option value="4">**</option>
        <option value="6">***</option>
        <option value="8">****</option>
        <option value="10">*****</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
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
