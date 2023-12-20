

<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String aid,aname,workexp,awardwinning,addrs,emailid,contno,username;
aid=request.getParameter("aid");
aname=request.getParameter("aname");
workexp=request.getParameter("workexp");
awardwinning=request.getParameter("awardwin");
addrs=request.getParameter("addrs");
emailid=request.getParameter("emailid");
contno=request.getParameter("contno");
username=request.getParameter("username");
int k=s.st.executeUpdate("update Artist_Details set Aname='"+aname+"',workExperience="+workexp+",AwardWinnig='"+awardwinning+"',Aaddress='"+addrs+"',email_id='"+emailid+"',contNo='"+contno+"',User_Name='"+username+"' where Aid="+aid+" ");
%> 

<script>
alert("Record Is updated..");
document.location="viewartist_details.jsp";
</script>