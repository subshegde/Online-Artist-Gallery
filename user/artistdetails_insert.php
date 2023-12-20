

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
int k=s.st.executeUpdate("insert into Artist_Details values(null,'"+aname+"',"+workexp+",'"+awardwinning+"','"+addrs+"','"+emailid+"','"+contno+"','"+username+"')");
%> 

<script>
alert("Record Is Inserted..");
document.location="artist_form.jsp";
</script>