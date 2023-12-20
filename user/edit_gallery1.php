

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
int k=s.st.executeUpdate("update Gallery_Details set Gname='"+gname+"',Description='"+descp+"',ArtistId="+aid+",upload_Paint='"+uploadpaint+"',`Date`='"+date+"',Gallery_Type_id="+gtypeid+" where Gid="+gid+" ");
%> 

<script>
alert("Record Is updated..");
document.location="viewgallery_details.jsp";
</script>