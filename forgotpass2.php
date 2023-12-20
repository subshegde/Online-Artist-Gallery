<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%

     String suser=session.getAttribute("uname").toString();
  
  ResultSet rs=s.st.executeQuery("select * from login where user_name='"+suser+"' ");
  rs.next();

%>


<html>

<head>
<title>forgot password</title>
</head>

<body bgcolor="#F2F2F2">
<form method="POST" action="forgotpass3.jsp">
  <p align="center">&nbsp;</p>
  <p align="center"><b><font size="6" color="#800000">Please Answer the 
  following Question which was Submitted by you through the signup form at the 
  time of Registration</font></b></p>
  <p>&nbsp;</p>
  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="46%" id="AutoNumber1" height="110">
      <tr>
        <td width="100%" colspan="2" height="65" >
  <p align="center"><b><font face="Times New Roman">&nbsp;</font> 
  <font size="5">Forgot Password</font></b></p>
        </td>
      </tr>
      <tr>
        <td width="50%" height="30" >
        <font face="Monotype Corsiva" size="5">&nbsp;Hint Question</font></td>
        <td width="50%" height="30" align="left" valign="middle" >
 
  <input type="text" name="T1" value="<%=rs.getString(4) %>"  size="20"></p>
        </td>
      </tr>
      <tr>
        <td width="50%" height="37" >
        <font face="Monotype Corsiva" size="5">&nbsp;Hint Answer</font></td>
        <td width="50%" height="37" valign="middle" >&nbsp;<input type="text" name="T2" size="20"></td>
      </tr>
      <tr>
        <td width="100%" height="1" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Submit" name="B1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" value="Reset" name="B2"></td>
      </tr>
    </table>
    </center>
  </div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
</form>
