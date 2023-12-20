



<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String uid,fname,lname,addr,contno,emailid,username;
uid=request.getParameter("userid");
fname=request.getParameter("firstname");
lname=request.getParameter("lastname");
addr=request.getParameter("addrs");
contno=request.getParameter("contactno");
emailid=request.getParameter("emailid");
username=request.getParameter("username");
int k=s.st.executeUpdate("insert into User_Details values(null,'"+fname+"','"+lname+"','"+addr+"','"+contno+"','"+emailid+"','"+username+"')");
%> 

<script>
alert("Record Is Inserted..");
document.location="userdetails_form.jsp";
</script>