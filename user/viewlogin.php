<table width="200" border="1">
  <tr>
    <td>user_name</td>
    <td>pass_word</td>
    <td>type</td>
    <td>hint_quest</td>
    <td>hint_ans</td>
    <td>status</td>
  </tr>
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
ResultSet rs=s.st.executeQuery("select * from login");
while(rs.next())
{
%>
  <tr>
    <td>&nbsp;<%=rs.getString("User Name")%></td>
    <td>&nbsp;<%=rs.getString("PassWord")%></td>
    <td>&nbsp;<%=rs.getString("type")%></td>
    <td>&nbsp;<%=rs.getString("Hintquest")%></td>
    <td>&nbsp;<%=rs.getString("Hintans")%></td>
    <td>&nbsp;<%=rs.getString("Status")%></td>
  </tr>
  <%
  }
  %>
</table>
