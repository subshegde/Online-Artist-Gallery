<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
     String Bid=request.getParameter("Bid");
	 ResultSet rs=s.st.executeQuery("select * from Buyer_Details where Bid="+Bid+" ");
	 rs.next();
%>
<body>
<p>&nbsp;</p>
<form name="formID" id="formID" method="post" action="edit_buyer2.jsp">
  <table width="336" border="1">
    <tr>
      <td colspan="2">BUYER DETAILS</td>
    </tr>
    <tr>
      <td width="137">Bid</td>
      <td width="183"><input name="bid" type="text" id="bid" value="<%=rs.getInt("Bid")%>" class="validate[required,custom[onlyNumber]]">
      </td>
    </tr>
    <tr>
      <td>Bname</td>
      <td><input name="bname" type="text" id="bname" value="<%=rs.getString("Bname")%>" class="validate[required,custom[onlyLetter]]">
      </td>
    </tr>
    <tr>
      <td>Baddr</td>
      <td><textarea name="baddr" id="baddr"class="validate[required,custom[required]]" ><%=rs.getString("Baddr")%></textarea></td>
    </tr>
    <tr>
      <td>Bcity</td>
      <td><input name="bcity" type="text" id="bcity" value="<%=rs.getString("Bcity")%>" class="validate[required,custom[onlyLetter]]">
      </td>
    </tr>
    <tr>
      <td>contactno</td>
      <td><input name="contnum" type="text" class="validate[required,custom[onlyNumber]]" id="contnum" value="<%=rs.getString("ContNum")%>"></td>
    </tr>
    <tr>
      <td>emailid </td>
      <td><input name="emailid" type="text" id="emailid" value="<%=rs.getString("Email_id")%>" class="validate[required,custom[email]]">
      </td>
    </tr>
    <tr>
      <td>workst</td>
      <td><input name="workst" type="text" id="workst" value="<%=rs.getString("work_status")%>" class="validate[required,custom[onlyLetter]]">
      </td>
    </tr>
    <tr>
      <td>username</td>
      <td><input name="username" type="text" id="username" value="<%=rs.getString("user_name")%>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="update"></td>
      <td><p>&nbsp;
      </p>
      </td>
    </tr>
  </table>
</form>
</body>
</html>
