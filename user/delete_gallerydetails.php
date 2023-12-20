<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String Gid=request.getParameter("Gid");
int k=s.st.executeUpdate("delete from Gallery_Details where Gid="+Gid+"");
%>
<script>
alert("Deleted...");
document.location="viewgallery_details.jsp";
</script>