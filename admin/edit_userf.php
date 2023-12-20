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
                        <h4>User Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
     String Uid=request.getParameter("Uid");
	 ResultSet rs=s.st.executeQuery("select * from User_Details where Uid="+Uid+" ");
	 rs.next();
%>
<body>
<form name="formID" id="formID" method="post" action="edit_userin.jsp">
  <table width="443" border="0">
    <tr>
      <td colspan="2">USER Details </td>
    </tr>
    <tr>
      <td width="172">User Id </td>
      <td width="255"><input name="userid" type="text" id="userid" value="<%=rs.getInt("Uid")%>" class="validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td>First Name </td>
      <td><input name="firstname" type="text" id="firstname" value="<%=rs.getString("FirstName")%>" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Last Name </td>
      <td><input name="lastname" type="text" id="lastname" value="<%=rs.getString("LastName")%>" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="addrs" id="addrs" class="validate[required,custom[required]"> <%=rs.getString("Address")%></textarea></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contactno" type="text" id="contactno" value="<%=rs.getString("ContNo")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="emailid" type="text" id="emailid" value="<%=rs.getString("Email_id")%>" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><input name="username" type="text" id="username" value="<%=rs.getString("User_Name")%>" class="validate[required,custom[onlyLetter]]"></td>
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
