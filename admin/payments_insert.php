

<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String pid,bid,gid,bankname,amt,date,status;
pid=request.getParameter("payerid");
bid=request.getParameter("buyerid");
gid=request.getParameter("galleryid");
bankname=request.getParameter("bankname");
amt=request.getParameter("amount");
date=request.getParameter("date");
status=request.getParameter("status");
int k=s.st.executeUpdate("insert into payments values(null,"+bid+","+gid+",'"+bankname+"',"+amt+",'"+date+"','"+status+"')");
%> 

<script>
alert("Record Is Inserted..");
document.location="payments_form.jsp";
</script>