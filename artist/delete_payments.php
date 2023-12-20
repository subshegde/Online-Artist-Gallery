<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String Pid=request.getParameter("Pid");
int k=s.st.executeUpdate("delete from Payments where Pid="+Pid+"");
%>
<script>
alert("Deleted...");
document.location="view_payments.jsp";
</script>