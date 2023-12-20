
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String bid=request.getParameter("bid");

int k=s.st.executeUpdate("delete from Buyer_Details where Bid="+bid+"");
%>
<script>
alert("Deleted...");
document.location="viewbuyer_details.jsp";
</script>