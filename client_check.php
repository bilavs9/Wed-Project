<?php
include("mysql_connect.php");
$sql="select * from clients_details where username='$username' and password='$password'";
$res=mysql_query($sql);
$rc=mysql_num_rows($res);
if($rc>0)
{
	$_SESSION["loginfo"]=md5("validuserandpassword");
	$_SESSION["userid"]=mysql_result($res,0,"clientd");
	$_SESSION["username"]=mysql_result($res,0,"username");
	$_SESSION["client"]=mysql_result($res,0,"client");
?>
<script>
	location.replace("test.php");
</script>  
<?php
}
else
{
$_SESSION["loginfo"]=md5("invaliduserandpassword");
?>   
<script>
	location.replace("loginpage.php");
</script>
<?php
}
?>