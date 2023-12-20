<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String gid=request.getParameter("Gid");

int k=s.st.executeUpdate("delete from GType_Details where Gid="+gid+"");
%>
<script>
alert("Deleted...");
document.location="viewgtype_details.jsp";
</script>