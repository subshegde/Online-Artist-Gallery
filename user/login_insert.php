


<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String username,pw,type,hintquest,hintans,status;
username=request.getParameter("username");
pw=request.getParameter("password");
type=request.getParameter("type");
hintquest=request.getParameter("hintquestion");
hintans=request.getParameter("hintans");
status=request.getParameter("status");
int k=s.st.executeUpdate("insert into login values('"+username+"','"+pw+"','"+type+"','"+hintquest+"','"+hintans+"','"+status+"')");
%> 

<script>
alert("Record Is Inserted..");
document.location="login_form.jsp";
</script>