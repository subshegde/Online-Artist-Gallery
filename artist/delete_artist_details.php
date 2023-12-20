<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String Aid=request.getParameter("Aid");

int k=s.st.executeUpdate("delete from Artist_Details where Aid="+Aid+"");
%>
<script>
alert("Deleted...");
document.location="viewartist_details.jsp";
</script>