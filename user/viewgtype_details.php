<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">Beauty Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Gallerytype Details</h4>
                  
         <!-- Table Options -->
                <div class="clearfix">
                    <div class="btn-group pull-right">
                        <button class="btn" data-toggle="tooltip" title="Table Settings"><i class="icon-cog"></i></button>
                        <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down"></i></button>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="icon-print"></i> Print</a></li>
                            <li><a href="javascript:void(0)"><i class="icon-file-alt"></i> Save as PDF</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)"><i class="icon-external-link"></i> Export</a></li>
                        </ul>
                    </div>
                    <a href="gtype_form.jsp" class="btn btn-success"><i class="icon-plus"></i> Add New GalleryType Details</a>
                </div>
                <!-- END Table Options -->
				<table class="table table-bordered table-hover">
  <thead>
  <tr>
    <th width="22">Gid</th>
    <th width="73">gtype_name</th>
    <th width="66">description</th>
    <th width="39">Delete</th>
    <th width="24">Edit</th>
  </tr>
  </thead>
  <tbody>
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
ResultSet rs=s.st.executeQuery("select * from GType_Details");
while(rs.next())
{
int Gid=rs.getInt("Gid");
%>
  <tr>
    <td>&nbsp;<%=Gid%></td>
    <td>&nbsp;<%=rs.getString("Gtype_Name")%></td>
    <td>&nbsp;<%=rs.getString("description")%></td>
    <td><a href="delete_gtype_details.jsp?Gid=<%=Gid%>">Delete</a></td>
	 <td><a href="edit_gtypef.jsp?Gid=<%=Gid%>">Edit</a></td>
  </tr>
  <%
  }
  %>
  </tbody>
</table>
