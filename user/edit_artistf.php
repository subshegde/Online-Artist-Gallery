<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
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
                        <h4>ARTIST DETAILS </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
     String Aid=request.getParameter("Aid");
	 ResultSet rs=s.st.executeQuery("select * from Artist_Details where Aid="+Aid+" ");
	 rs.next();
%>
<body>
<form name="formID" id="formID" method="post" action="edit_artistin.jsp">
  <table width="405" border="0">
    <tr>
      <td colspan="2">ARTIST DETAILS </td>
    </tr>
    <tr>
      <td width="131">artist id</td>
      <td width="94"><input name="aid" type="text" id="aid"  value="<%=rs.getInt("Aid")%>"></td>
    </tr>
    <tr>
      <td>artist name</td>
      <td><input name="aname" type="text" id="aname" value="<%=rs.getString("Aname")%>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>workexp</td>
      <td><input name="workexp" type="text" id="workexp" value="<%=rs.getInt("workExperience")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>award winning </td>
      <td><input name="awardwin" type="text" id="awardwin" value="<%=rs.getString("AwardWinnig")%>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>address      </td>
      <td><textarea name="addrs" id="addrs" class="validate[required]" ><%=rs.getString("Aaddress")%></textarea> </td>
    </tr>
    <tr>
      <td>email id </td>
      <td><input name="textfield" type="text" value="<%=rs.getString("email_id")%>" class="validate[required,custom[email]]" ></td>
    </tr>
    <tr>
      <td>cont no </td>
      <td><input name="contno" type="text" id="contno" value="<%=rs.getString("contNo")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>user name </td>
      <td><input name="username" type="text" id="username" value="<%=rs.getString("User_Name")%>" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
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
