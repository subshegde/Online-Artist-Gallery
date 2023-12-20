<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				               <!-- Pre Page Content -->
            <div id="pre-page-content">
                <h1><i class="glyphicon-nameplate_alt themed-color"></i> General Forms<br><small>All the elements you need!</small></h1>
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
<%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%
     String Pid=request.getParameter("Pid");
	 ResultSet rs=s.st.executeQuery("select * from Payments where Pid="+Pid+" ");
	 rs.next();
%>
<body>
<form name="formID" id="formID" method="post" action="paymentsin_edit.jsp">
  <table width="611" border="0">
    <tr>
      <td colspan="2">PAYMENTS</td>
    </tr>
    <tr>
      <td>payer id </td>
      <td><input name="payerid" type="text" id="payerid" value="<%=rs.getInt("Pid")%>"></td>
    </tr>
    <tr>
      <td>buyer id </td>
      <td><input name="buyerid" type="text" id="buyerid" value="<%=rs.getInt("Bid")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>gallery id </td>
      <td><input name="galleryid" type="text" id="galleryid" value="<%=rs.getInt("Gid")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>bank name </td>
      <td><input name="bankname" type="text" id="bankname" value="<%=rs.getString("Bank_Name")%>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>amount</td>
      <td><input name="amount" type="text" id="amount" value="<%=rs.getInt("Amt")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>date</td>
      <td><input name="date" type="text" id="date" value="<%=rs.getString("Date")%>" class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>status</td>
      <td><input name="status" type="text" id="status" value="<%=rs.getString("status")%>"class="validate[required,custom[onlyLetter]]">></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="update"></td>
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
