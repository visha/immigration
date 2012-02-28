<?php
require 'credential.php';

session_start();
$con =  mysql_connect(DB_HOST,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
//dob
$dob = $_POST[element_5_3];
$dob .= $_POST[element_5_1];
$dob .= $_POST[element_5_2];

$time = strtotime($dob);
$mydate = date('Y-m-d',$time);


$sql = "INSERT INTO userdetails (UserId,UserType, FirstName, LastName, Title, Gender, StreetAddress, Address2, City, State, Country, PinCode, HomeNo, BusinessNo, Email, MobileNo, FaxNo, DateofBirth, MaritalStatus, ChildrenNo, SecurityQns, SecurityAns, username, password) 
      VALUES ('$_POST[username]','1', '$_POST[fname]', '$_POST[lname]', '$_POST[prefix]', '$_POST[gender]', '$_POST[stradd]', '$_POST[addr2]', '$_POST[city]', '$_POST[state]', '$_POST[country]', '$_POST[postcode]', '$_POST[homeno]', '$_POST[bussinessno]', '$_POST[email]', '$_POST[mobileno1]', '$_POST[faxno]', '$mydate', '$_POST[marstatus]', '$_POST[children]', '$_POST[SecurityQns]', '$_POST[securityAns]', '$_POST[username]', '$_POST[pwd]')"; 
	  
$sdob = $_POST[selement_5_3];
$sdob .= $_POST[selement_5_1];
$sdob .= $_POST[selement_5_2];

$time = strtotime($sdob);
$smydate = date('Y-m-d',$time);
	  
$sql2= "INSERT INTO userinfo (UserId,usertype,collegeinformation,educationalinfo,noofyears,fm1,fy1,tm1,ty1,job1,fm2,fy2,tm2,ty2,job2,fm3,fy3,tm3,ty3,job3,fm4,fy4,tm4,ty4,job4,fmother,fyother,tmother,tyother,jobother,engs,engw,engr,engu,fres,frew,frer,freu,financialinfo,spousenoofyears,spouseeducationlevel,spousecollegeinformation,SpouseFirstName,SpouseLastName,SpouseEmail,SpouseMobileNumber,SpouseDOB,sfm1,sfy1,stm1,sty1,sjob1,sfm2,sfy2,stm2,sty2,sjob2,sfm3,sfy3,stm3,sty3,sjob3,sfmother,sfyother,stmother,styother,sjobother,sengs,sengw,sengr,sengu,sfres,sfrew,sfrer,sfreu,cjob,coffer,cwork,cstudy,crel,Declaration)  
	  VALUES ('$_POST[username]','Customer','$_POST[collegeinformation]', '$_POST[educationlevel]', $_POST[noofyears],'$_POST[fm1]','$_POST[fy1]','$_POST[tm1]','$_POST[ty1]','$_POST[job1]','$_POST[fm2]','$_POST[fy2]','$_POST[tm2]','$_POST[ty2]','$_POST[job2]','$_POST[fm3]','$_POST[fy3]','$_POST[tm3]','$_POST[ty3]','$_POST[job3]','$_POST[fm4]','$_POST[fy4]','$_POST[tm4]','$_POST[ty4]','$_POST[job4]','$_POST[fmother]','$_POST[fyother]','$_POST[tmother]','$_POST[tyother]','$_POST[jobother]','$_POST[engs]','$_POST[engw]','$_POST[engr]','$_POST[engu]','$_POST[fres]','$_POST[frew]','$_POST[frer]','$_POST[freu]','$_POST[financialinfo]','$_POST[snoofyears]', '$_POST[seducationlevel]','$_POST[scollegeinformation]','$_POST[sfname]','$_POST[slname]', '$_POST[semail]', '$_POST[smobileno1]','$smydate','$_POST[sfm1]','$_POST[sfy1]','$_POST[stm1]','$_POST[sty1]','$_POST[sjob1]', '$_POST[sfm2]','$_POST[sfy2]','$_POST[stm2]','$_POST[sty2]','$_POST[sjob2]', '$_POST[sfm3]','$_POST[sfy3]','$_POST[stm3]','$_POST[sty3]','$_POST[sjob3]', '$_POST[sfmother]','$_POST[sfyother]','$_POST[stmother]','$_POST[styother]','$_POST[sjobother]',
	  '$_POST[sengs]','$_POST[sengw]','$_POST[sengr]','$_POST[sengu]', '$_POST[sfres]','$_POST[sfrew]','$_POST[sfrer]','$_POST[sfreu]','$_POST[cjob]','$_POST[coffer]','$_POST[cwork]' ,'$_POST[cstudy]','$_POST[crel]','$_POST[Declaration]')";

 
       if (!mysql_query($sql,$con))
  		{
			//die('Error: ' . mysql_error());
			$_SESSION['error'] = "Username Already Exists";
			header("Location: InitialAssessmentPersonalDetails.php");
		}
		else
		{
		
		   if (!mysql_query($sql2,$con))
			{
			die('Error: ' . mysql_error());
			}
		  else
			{		  
			  
			  header("Location: success.php");
			  }
	}  
 ?>
 
