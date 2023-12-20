


<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String gid,gtypename,descp;
gid=request.getParameter("galleryid");
gtypename=request.getParameter("gtypename");
descp=request.getParameter("description");
int k=s.st.executeUpdate("insert into Gtype_Details values(null,'"+gtypename+"','"+descp+"')");
%> 

<script>
alert("Record Is Inserted..");
document.location="gtype_form.jsp";
</script>