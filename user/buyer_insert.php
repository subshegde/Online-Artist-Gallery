
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String Bid,Bname,Baddr,Bcity,contno,emailid,workst,username;
Bid=request.getParameter("bid");
Bname=request.getParameter("bname");
Baddr=request.getParameter("baddr");
Bcity=request.getParameter("bcity");
contno=request.getParameter("contactno");
emailid=request.getParameter("emailid");
workst=request.getParameter("workst");
username=request.getParameter("username");
int k=s.st.executeUpdate("insert into Buyer_Details values(null,'"+Bname+"','"+Baddr+"','"+Bcity+"','"+contno+"','"+emailid+"','"+workst+"','"+username+"')");
%> 

<script>
alert("Record Is Inserted..");
document.location="buyer_form.jsp";
</script>