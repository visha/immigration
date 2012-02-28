<?php
require 'credential.php';
session_start();
//$con =  mysql_connect(DB_HOST,"geimmig_admin","admin@123");
 	//mysql_select_db("geimmig_immigrationapp",$con);
	 
	$con =  mysql_connect(DB_HOST,DB_USER,DB_PASS);
 	mysql_select_db(DB_NAME,$con);


$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$sql="SELECT * FROM userdetails WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){

	$row=mysql_fetch_row($result);
	$u = $row[23];
	if($u == "Admin")
	{

		$userid=$row[0];
		$useinfo = $row[23];
		$_SESSION['userinfo']=$userid;
		$_SESSION['usertypeinfo']=$useinfo;

		header("location:admin.php");

	}
	else
	{
		$userid=$row[0];
		$useinfo = $row[23];
		$_SESSION['userinfo']=$userid;
		$_SESSION['usertypeinfo']=$useinfo;

		header("location:su.php");	
			
	}
	
	

}
else {
mysql_close();
header("location:IncorrectLogin.php");

		
}
?>
