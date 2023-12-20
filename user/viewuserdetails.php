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

                        <h4>View User Details</h4>
                  
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
                    <a href="userdetails_form.jsp" class="btn btn-success"><i class="icon-plus"></i> Add New User Details</a>
                </div>
                <!-- END Table Options --><table class="table table-bordered table-hover">
 <table  class="table table-bordered table-hover">
<thead>
 <tr>
    <th>uid</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>address</th>
    <th>contno</th>
    <th>emailid</th>
    <th>user_name</th>
    <th>delete</th>
    <th>Edit</th>
  </tr>
  <%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
ResultSet rs=s.st.executeQuery("select * from User_Details");
while(rs.next())
{
String Uid=rs.getString("Uid");
%>
  <tr>
    <td>&nbsp;<%=Uid%></td>
    <td>&nbsp;<%=rs.getString("FirstName")%></td>
    <td>&nbsp;<%=rs.getString("LastName")%></td>
    <td>&nbsp;<%=rs.getString("Address")%></td>
    <td>&nbsp;<%=rs.getString("ContNo")%></td>
    <td>&nbsp;<%=rs.getString("Email_Id")%></td>
    <td>&nbsp;<%=rs.getString("User_Name")%></td>
    <td><a href="delete_user_details.jsp?Uid=<%=Uid%>">delete</a></td>
    <td><a href="edit_userf.jsp?Uid=<%=Uid%>">edit</a></td>
  </tr>
  <%
  }
  %>
  </tbody>
</table>
 </div> 

            <!-- END Page Content -->
			
			 <script src="js/helpers/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

       
    </body>
</html>
<jsp:include page="footer.jsp"></jsp:include>
