
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String Rid=request.getParameter("Rid");
int k=s.st.executeUpdate("delete from Ratings where Rid="+Rid+"");
%>
<script>
alert("Deleted...");
document.location="viewrating.jsp";
</script>