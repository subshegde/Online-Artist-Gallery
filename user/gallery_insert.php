

<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String gid,gname,descp,aid,uploadpaint,date,gtypeid;
gid=request.getParameter("gid");
gname=request.getParameter("galleryname");
descp=request.getParameter("description");
aid=request.getParameter("artistid");
uploadpaint=request.getParameter("uploadpaint");
date=request.getParameter("date");
gtypeid=request.getParameter("gtypeid");
int k=s.st.executeUpdate("insert into Gallery_Details values(null,'"+gname+"','"+descp+"',"+aid+",'"+uploadpaint+"','"+date+"',"+gtypeid+")");
%> 

<script>
alert("Record Is Inserted..");
document.location="gallery_form.jsp";
</script>