
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
int k=s.st.executeUpdate("Update Buyer_Details set Bname='"+Bname+"',Baddr='"+Baddr+"',Bcity='"+Bcity+"',ContNum='"+contno+"',Email_id='"+emailid+"',work_status='"+workst+"',user_name='"+username+"' where Bid="+Bid+" ");
%>

<script>
alert("Record Is updated..");
document.location="viewbuyer_details.jsp";
</script>