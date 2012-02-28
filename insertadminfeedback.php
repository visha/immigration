<?php

require 'credential.php';
session_start();
$user= $_SESSION['userid'];
$con =  mysql_connect(DB_HOST,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
	
	
	$mysql = array();    // create array of mysql escaped values
	$mysql['comments'] = mysql_real_escape_string( $_POST['comments'] );

	
	$sql = "UPDATE userdetails SET pScore='$_POST[pScore]',eScore='$_POST[eScore]',wScore='$_POST[wScore]',lScore='$_POST[lScore]',fScore='$_POST[fScore]',EdScore='$_POST[EdScore]',LanScore='$_POST[LanScore]',CFScore='$_POST[CFScore]', score = '$_POST[TotalScore]', comments = '{$mysql['comments']}', eligibility = '$_POST[celigible]' WHERE UserId ='$user'";
	 if (!mysql_query($sql,$con))
  		{
  		die('Error: ' . mysql_error());
  		}
		else
		{
		  header("Location: admin.php");
		}	
	
?>
