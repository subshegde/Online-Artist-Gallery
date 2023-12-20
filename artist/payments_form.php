<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i>Payment Form<br><small></small></h1>
            </div>
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">General</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Payment Details </h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

<form name="formID" id="formID" method="post" action="payments_insert.jsp">
  <table width="611" border="0">
    <tr>
      <td colspan="2">PAYMENTS</td>
    </tr>
    <tr>
      <td>buyer id </td>
      <td><select name="buyerid" id="buyerid">
        <option>Select Buyer</option>
		
		<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
ResultSet rs=s.st.executeQuery("select * from buyer_details");
while(rs.next())
{
%>
<option value="<%=rs.getInt("bid")%>"><%=rs.getString("bname")%></option>
<%
}
%>
      </select></td>
    </tr>
    <tr>
      <td>gallery id </td>
      <td><select name="galleryid" id="galleryid">
        <option>Select Gallery</option>
		
		<%
ResultSet rs1=s.st.executeQuery("select * from gtype_details");
while(rs1.next())
{
%>
<option value="<%=rs1.getInt("gallery_type_id")%>"><%=rs1.getString("gtype_name")%></option>
<%
}
%>
   </select></td>
    </tr>
    <tr>
      <td>bank name </td>
      <td><input name="bankname" type="text" id="bankname"class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>amount</td>
      <td><input name="amount" type="text" id="amount"class="validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td>date</td>
      <td><input name="date" type="text" id="date"class="validate[required,custom[Date]]"></td>
    </tr>
    <tr>
      <td>status</td>
      <td><input name="status" type="text" id="status" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
      </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<jsp:include page="footer.jsp"></jsp:include>
