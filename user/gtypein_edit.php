


<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String Gid,gtypename,descp;
Gid=request.getParameter("galleryid");
gtypename=request.getParameter("gtypename");
descp=request.getParameter("description");
int k=s.st.executeUpdate("update GType_Details set Gtype_Name='"+gtypename+"',description='"+descp+"'where Gid="+Gid+" ");
%> 

<script>
alert("Record Is updated..");
document.location="viewgtype_details.jsp";
</script>