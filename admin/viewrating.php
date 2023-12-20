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
                    <li class="active"><a href="">Rating Details</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>View Rating Details</h4>
                  
         <!-- Table Options -->
                <div class="clearfix">
                                        <a href="ratings_form.jsp" class="btn btn-success"><i class="icon-plus"></i> Add New Rating Details</a>
                </div>
                <!-- END Table Options -->
				<p>Ratings Details</p>
<table class="table table-bordered table-hover">
 <thead>
<tr>
    <th>Sl No </th>
    <th>Gallery Name </th>
	<th>Gallery Image </th>
    <th>Rating </th>
   
  </tr>
</thead>
<tbody>  
  <%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
int sl_no=0;

ResultSet rs=s.st.executeQuery("select * from Ratings r,gallery_details gd where r.gid=gd.gid");
while(rs.next())
{
sl_no=sl_no+1;
String Rid=rs.getString("Rid");
int ratings=rs.getInt("Ratings");
 

%>
  <tr>
    <td>&nbsp;<%=sl_no%></td>
    <td>&nbsp;<%=rs.getString("gname")%></td>
	<td>&nbsp; <img src="../artist/paint_images/<%=rs.getString("upload_paint")%>" width="200" height="200" alt="image" title="<%=gname%>"></td>
    <td>&nbsp;
	 <div class="progress progress-striped progress-danger active">
       <div class="bar" style="width: <%=ratings%>%">(<%=ratings%>) Rating..</div>
        </div>
							
							</td>
  </tr>
  <%
  }
  %>
  </tbody>
</table>
