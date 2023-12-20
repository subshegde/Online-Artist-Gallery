<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%

     String suser=session.getAttribute("uname").toString();

    String uans=request.getParameter("T2");

    ResultSet rs=s.st.executeQuery("select * from login where user_name='"+suser+"' ");

   rs.next();
  
   String s1,s2,s5;

  s1=rs.getString(1);
  s2=rs.getString(2);
  s5=rs.getString(5);

  if(uans.equals(s5))
  {
  %>
<body bgcolor="#F2F2F2">
  <p><b><font size="5">&nbsp;</font></b></p>
  <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b><font size="7" color="#FF00FF"><a href="login.jsp">LOGIN HERE</a></font></b></p>
  <p>&nbsp;</p>
  <p><font size="5" color="#0000FF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </b></font><b><font size="7"><font color="#0000FF">User Name :</font><font color="#800000"><marquee behavior=slide scrollamount=115 scrolldelay=8 width="538"><%out.println(s1);%></marquee></font></font></b></p>
  <font size="7">
  <p><b><font size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font><font color="#0000FF" size="7">Password&nbsp;&nbsp;&nbsp; :</font><font color="#800000"><marquee behavior=slide scrollamount=115 scrolldelay=8 width="538"><%out.println(s2);%></marquee></font></b></p>

<%
  }

  else
  {
    out.println("<p>&nbsp<p>&nbsp<p>&nbsp<p>&nbsp<p>&nbsp<p><font size=8 color=#800000><b><marquee behavior=slide scrollamount=115 scrolldelay=8>Please Check Your Hint Answer</marquee></b></font></p></p></p></p></p></p>");
  }
%>
<p>&nbsp;</p>
