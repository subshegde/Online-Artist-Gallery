<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
  String s1=request.getParameter("T1");
   


  ResultSet rs=s.st.executeQuery("select * from login where user_name='"+s1+"' ");
  if(rs.next())
  {
       session.setAttribute("uname",s1);
   %>

      <jsp:forward page="forgotpass2.jsp"/>
  <%
   

  }
  else
  {
   
    out.println("<p><font size=8 color=#800000><b><marquee behavior=slide scrollamount=115 scrolldelay=8>Sorry.... Login Name Not Found </marquee></b></font></p>");
   }
%><body bgcolor="#F2F2F2">