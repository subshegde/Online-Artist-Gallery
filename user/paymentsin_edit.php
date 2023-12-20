

<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String pid,bid,gid,bankname,amt,date,status;
pid=request.getParameter("payerid");
bid=request.getParameter("buyerid");
gid=request.getParameter("galleryid");
bankname=request.getParameter("bankname");
amt=request.getParameter("amount");
date=request.getParameter("date");
status=request.getParameter("status");
int k=s.st.executeUpdate("update Payments set Bid='"+bid+"',Gid='"+gid+"',Bank_Name='"+bankname+"',Amt='"+amt+"',`Date`='"+date+"',status='"+status+"' where Pid="+pid+" ");
%> 

<script>
alert("Record Is updated..");
document.location="view_payments.jsp";
</script>