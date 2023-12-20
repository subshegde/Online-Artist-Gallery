<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
<body>
<form name="formID" id="formID" method="post" action="login_insert.jsp">
  <table width="293" border="1">
    <tr>
      <td colspan="2"><div align="center">LOGIN TABLE </div></td>
    </tr>
    <tr>
      <td width="84">User Name </td>
      <td width="193"><input name="username" type="text" id="username" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Password </td>
      <td><input name="password" type="text" id="password" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="type" type="text" id="type" class="validate[required]"></td>
    </tr>
    <tr>
      <td>hint question </td>
      <td><input name="hintquestion" type="text" id="hintquestion" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>hint answer </td>
      <td><input name="hintans" type="text" id="hintans" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
</body>
</html>
