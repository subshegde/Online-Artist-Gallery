
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String Uid=request.getParameter("Uid");
int k=s.st.executeUpdate("delete from User_Details where Uid="+Uid+"");
%>
<script>
alert("Deleted...");
document.location="viewuserdetails.jsp";
</script>