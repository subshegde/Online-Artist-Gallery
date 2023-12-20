

<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String rid,gid,username,rating,date;
rid=request.getParameter("ratingid");
gid=request.getParameter("galleryid");
username=request.getParameter("username");
rating=request.getParameter("ratings");
date=request.getParameter("date");
int k=s.st.executeUpdate("update Ratings set Gid="+gid+",UserName='"+username+"',Ratings='"+rating+"',`Date`='"+date+"' where Rid="+rid+"");
%> 

<script>
alert("Updated..");
document.location="viewrating.jsp";
</script>