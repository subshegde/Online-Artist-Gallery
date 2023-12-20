

<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>

<%
String rid,gid,username,rating,date;

gid=request.getParameter("galleryid");
rating=request.getParameter("ratings");

int ratings=Integer.parseInt(rating);


ResultSet rs=s.st.executeQuery("select * from Ratings where gid="+gid+"");
if(rs.next())
{
int rat=rs.getInt("ratings");

int user_ratings=rat+ratings;
int k=s.st.executeUpdate("update ratings set ratings="+user_ratings+" where gid="+gid+" ");
}
else
{
int k=s.st.executeUpdate("insert into ratings(gid,ratings) values("+gid+","+rating+")");
}
%> 

<script>
alert("Rating Is Added..");
document.location="viewrating.jsp";
</script>