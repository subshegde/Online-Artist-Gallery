<?php
$type_ans=$_POST["type_ans"];
$db_hintans=$_POST["db_hintans"];
$pwd=$_POST["password"];
if($type_ans==$db_hintans)
{
?>
<script type="text/javascript">
alert("Your Password is <?php echo $pwd; ?>");
document.location="login/index.html";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Wrong Hint Answer");
document.location="login/index.html";
</script>
<?php

}
?>
</body>
</html>