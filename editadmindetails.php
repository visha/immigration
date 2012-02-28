<?php
  	require 'credential.php';
	session_start();
    $editName =  $_GET["primaryKeyFieldName"]; 
	$_SESSION['userid']=$editName; 
	$user= $_SESSION['userinfo']; 
	//Put it in session variable
	 
	$con =  mysql_connect(DB_HOST,DB_USER,DB_PASS);
 	mysql_select_db(DB_NAME,$con);
 
	 
 	$result = mysql_query("SELECT UserId,UserType, FirstName, LastName, Title, Gender, StreetAddress, Address2, City, State, Country, PinCode, HomeNo, BusinessNo, Email, MobileNo, FaxNo, DateofBirth, MaritalStatus, ChildrenNo, SecurityQns, SecurityAns, username, password,score,comments,eligibility,pScore,eScore,wScore,lScore,fScore,EdScore,LanScore,CFScore FROM userdetails where UserId ='$editName'");
	$row = mysql_fetch_array($result);
	
	$result1 = mysql_query("SELECT collegeinformation,educationalinfo, noofyears, fm1,fy1,tm1,ty1,job1, fm2,fy2,tm2,ty2,job2,fm3,fy3,tm3,ty3,job3,fm4,fy4,ty4,tm4,job4,fmother,fyother,tmother,tyother, jobother, engs, engw, engr, engu, fres, frew,frer,freu,financialinfo, spousenoofyears, spouseeducationlevel, spousecollegeinformation,cjob,coffer,cwork,cstudy,crel,Declaration FROM userinfo where UserId ='$editName'");//.$editName);
	$rowUser = mysql_fetch_array($result1);
	
	//Select other information from user_info table
	//echo $row[username];	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.FreeWebsiteTemplateZ.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Kaminker Law Immigration Law</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<!--><script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>-->
<script type="text/javascript">
function calcScore()
{


var pscore=parseInt(document.getElementById('pScore').value);
if(pscore!=0)
{
	var sum=pscore;
}
var escore=parseInt(document.getElementById('eScore').value);
if(escore!=0)
{
	var sum =sum+escore;
}
var wscore=parseInt(document.getElementById('wScore').value);
if(wscore!=0)
{
	var sum=sum+wscore;
}
var lscore=parseInt(document.getElementById('lScore').value);
if(lscore!=0)
{
var sum=sum+lscore;
}
var fscore=parseInt(document.getElementById('fScore').value);
if(fscore!=0)
{
var sum=sum+fscore;
}
var Edscore=parseInt(document.getElementById('EdScore').value);
if(Edscore!=0)
{
var sum=sum+Edscore;
}

var wkscore=parseInt(document.getElementById('wkScore').value);
if(wkscore!=0)
{
var sum=sum+wkscore;
}

var Lanscore=parseInt(document.getElementById('LanScore').value);
if(Lanscore!=0)
{
var sum=sum+Lanscore;
}

var CFscore=parseInt(document.getElementById('CFScore').value);
if(CFscore!=0)
{
var sum=sum+CFscore;
}
//var sum=pscore+escore+wscore+lscore+fscore+Edscore+Lanscore+CFscore+wkscore;
document.getElementById('totalScore').value=parseInt(sum);
}
</script>

<!-- CuFon ends -->
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <img src="images/hklogo.png" width="100" height="100"/>
			<h1>HART KAMINKER</h1>
      </div>
      <div class="clr"></div>
	  <!--Top Menu -->
	  
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php">Home</a></li>
         <li ><a href="aboutus.php">About Us</a></li>
		 <li><a href="services.php">Services</a></li>
		 <li><a href="casestudies.php">Case Studies</a></li>
          <li><a href="contactus.php">Contact US</a></li>
          <li class="last"><a href="login.php">Client Login</a></li>
		  
        </ul>      
      </div>
	  	  <!--Top Menu Ends -->
      <div class="clr"></div>
      <div class="header_img">
      <img src="images/heder_img.jpg" alt="image" width="960" height="288" /></div>
      
      
    </div>
  </div>
  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Online Assessment Form</span></h2>
          <div class="clr"></div>
          
        
        
		  
		  
 				<form id="form_personal_details" class="appnitro"  method="post"  action="insertadminfeedback.php">
          <table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Personal Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
	  <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="pScore" name="pScore" class="element text small" value="<?php echo $row[pScore] ?>" type="text" onchange="calcScore()"/></td>
     
    </tr>
</table>		


<table width="600"  style="border: 1px solid black;" border="0" cellspacing="1" cellpadding="1" align="center">
<tr>
<td>UserName</td>
<td><?php echo $row[username] ?></td>
</tr>		
			
<tr>
<td>Name</td>
<td><?php echo $row[Title]; echo " ";  echo $row[FirstName]; echo" ";echo $row[LastName]?></td>

</tr>	

<tr>
<td>Email</td>
<td><?php echo $row[Email] ?> </td>
	
</tr>	


<tr>
<td>Street Address</td>
<td><?php echo $row[StreetAddress]?></td>
</tr>	


<tr>
<td>Street Address 2</td>
<td><?php echo $row[Address2]?></td>
</tr>	

<tr>
<td>City</td>
<td><?php echo $row[City] ?></td>
</tr>	

<tr>
<td>State / Province / Region</td>
<td><?php echo $row[State] ?></td>
</tr>


<tr>
<td>PostalCode</td>
<td><?php echo $row[PinCode]?></td>
</tr>	

<tr>
<td>Country</td>
<td><?php echo $row[Country]?></td>
</tr>

<tr>
		<td>Mobile</td>
		<td><?php echo $row[MobileNo]?></td>
		</tr>

		<tr>
		<td>Business</td>
		<td><?php echo $row[BusinessNo]?></td>
		</tr>
		
		<tr>
		<td>Home</td>
        <td><?php echo $row[HomeNo]?></td>	
        </tr>
		
		<tr>
		<td>Fax</td>
		<td><?php echo $row[FaxNo]?></td>
		</tr>
		

<tr><td>Date Of Birth</td>
<td><?php echo $row[DateofBirth]?> </td>
<tr>
		<td>Gender</td>
		<td><?php echo $row[Gender]?></td>
		</tr>
		
		<tr>
		<td>Marital Status</td>
		<td><?php echo $row[MaritalStatus]?></td>
		</tr>
		
		
		<tr>
		<td>Children</td>
		<td><?php echo $row[ChildrenNo]?></td>
		</tr>
		
		</tr>
		</table>
		
<!-- Education Details -->
<br/><br/>




   <table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Educational Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
	   <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="eScore" name="eScore" class="element text small" value="<?php echo $row[eScore] ?>" type="text" onchange="calcScore()"></td>	
     
    </tr>
</table>		


<table width="600"  style="border: 1px solid black;" border="0" cellspacing="1" cellpadding="1" align="center">



	<tr >
      <td width="250" align="left" bgcolor="#FFFFFF">Number of years:</td>	 
      <td><?php echo $rowUser[noofyears]?></td> 
	 </tr>
	  
	  
	  <tr>
	  <td width="250" align="left" bgcolor="#FFFFFF">Confirm Highest Level of Education:</td>	  
	  <td><?php echo $rowUser[educationalinfo]?></td>
	  
	  </tr>
	  
	  <tr>
	   <td width="93" bgcolor="#FFFFFF">College Information:</td>	  
	  <td>
	  <?php echo $rowUser[collegeinformation] ?> 
	  </td>
	  </tr>
	  </table>
	
<!-- Work Expereince -->

<br/><br/>

 <table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Work Expereince:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
	   <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="wScore" name="wScore" class="element text small" value="<?php echo $row[wScore] ?>" type="text" onchange="calcScore()"></td>
     
    </tr>
</table>		


<table width="600"  style="border: 1px solid black;" border="0" cellspacing="1" cellpadding="1" align="center">

		<tr align="center">

      <td width="85" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" height="14" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2" color="#7b1316"><b>From</b></font></td>
	  <td colspan="2" height="14" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2" color="#7b1316"><b>To</b></font></td>
      <td width="259" height="14" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Job
        Title/Description</b></font> </td>
    </tr>
	
	<tr align="center">
      <td width="93" bgcolor="#FFFFFF">&nbsp; </td>

      <td width="54" height="24" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Month</b></font></td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Year</b></font></div>
      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Month</b></font></div>
      </td>

      <td width="56" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Year</b></font></div>
      </td>
      <td width="259" height="24" bgcolor="#FFFFFF">
       
      </td>
    </tr>
	
	 <tr>

      <td width="85" nowrap bgcolor="#EFEFEF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;Present
        Job</b></font></td>
      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[fm1]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[fy1]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[tm1]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[ty1]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[job1]?>
      </td>
    </tr>
    <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;2nd
        last</b></font></td>
     

      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[fm2]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[fy2]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[tm2]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[ty2]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[job2]?>
      </td>

    </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;3rd
        last</b></font></td>
      
      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[fm3]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[fy3]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[tm3]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[ty3]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[job3]?>
      </td>

      </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;4th Last</b></font></td>
     
      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[fm4]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[fy4]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[tm4]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[ty4]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[job4]?>
      </td>
    </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;Other</b></font></td>
    
      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[fmother]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[fyother]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[tmother]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[tyother]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[jobother]?>
      </td>
    </tr>
	
	 

		</table>
		
		<br/><br/>
		<!-- Language Ability-->
		
		<table width="1000" >
		<tr>
		<td width="1000"><input id="engserror" name="engserror" readonly="true" width="1000"  style="border: none"/></td></tr>
		</table>	
		
			
	 <table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Language Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
     <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="lScore" name="lScore" class="element text small" value="<?php echo $row[lScore] ?>" type="text" onchange="calcScore()"></td>
    </tr>
</table>		


<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">


	
    
    <tr align="center">
      <td width="218" bgcolor="#FFFFFF">&nbsp; </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"><font size="2" face="verdana,Arial, Helvetica, sans-serif">&nbsp;Speak</font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">Write</font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">
        <div align="center"><font size="2" face="verdana,Arial, Helvetica, sans-serif">&nbsp;Read</font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"><font size="2" face="verdana,Arial, Helvetica, sans-serif">&nbsp;Understand</font></div>

      </td>
    </tr>
     <tr align="center">
      <td width="218" bgcolor="#FFFFFF">
        <div align="center"><font size="-1" face="verdana,Arial, Helvetica, sans-serif"><b>English</b></font></div>
      </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">

          <?php echo $rowUser[engs]?>
          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
         <?php echo $rowUser[engw]?>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <?php echo $rowUser[engr]?>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
         <?php echo $rowUser[engu]?>
          </font></div>
      </td>

    </tr>
    <tr align="center">
      <td width="218" bgcolor="#FFFFFF">
        <div align="center"><font size="-1" face="verdana,Arial, Helvetica, sans-serif"><b>French</b></font></div>
      </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
         <?php echo $rowUser[fres]?>

          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
                   <?php echo $rowUser[frew]?>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
                  <?php echo $rowUser[frer]?>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
                   <?php echo $rowUser[freu]?>
          </font></div>
      </td>

    </tr>
    <tr align="center">
      <td colspan="5" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF">m</font></div>
      </td>
    </tr>
  </table>
<br/><br/>
<!-- Financial Information-->


	<table cellspacing=1 cols=3 cellpadding=1 width=1000 align="center" >

		<td width="450"><input id="financialinfoerror" name="financialinfoerror" readonly="true"   style="border: none"/></td></tr>

		
		</tr>
		</table>
<table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Financial Information:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
     <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="fScore" name="fScore" class="element text small" value="<?php echo $row[fScore] ?>" type="text" onchange="calcScore()"></td>
    </tr>
</table>		


<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">
    <tr bgcolor="#6890A3">
      
<tr align="center">
      <td width="218" height="5" bgcolor="#FFFFFF" nowrap>
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="-1"><b>&nbsp;&nbsp;Personal Net Worth-&nbsp;&nbsp;in CDN Dollar($)</b></font></div>
      </td>

      <td width="218" height="5" bgcolor="#FFFFFF" nowrap>
			<?php echo $rowUser[financialinfo]?>
			</td> 
      


    </tr>
      
    </tr>
    </table>
	
	
	<br/><br/>
	<!-- Spouse Details-->
	
	

<table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Spouse Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
     <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="EdScore" name="EdScore" class="element text small" value="<?php echo $row[EdScore] ?>" type="text" onchange="calcScore()"></td>	 
    </tr>
</table>		


<table width="600"  style="border: 1px solid black;" border="0" cellspacing="1" cellpadding="1" align="center">	<tr>
<td width="150">First Name*</td>
<td></select><input id="sfname" name= "sfname" class="element text" maxlength="255" size="25" value="" tabindex="54" /></td>
<td width="300"><input id="sfnameerror" name= "sfnameerror" readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	


<tr>
<td>Last Name*</td>
<td><input id="slname" name= "slname" class="element text" maxlength="255" size="25" value=""  tabindex="55"/></td>
<td><input id="slnameerror" name= "slnameerror" readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	

<tr>
<td>Email*</td>
<td><input id="semail" name="semail" class="element text" type="text" maxlength="255"  size="25" value="" tabindex="56" /> </td>
<td><input id="semailerror" name= "semailerror"readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	


<tr>
		<td>Mobile*</td>
		<td><input id="smobileno1" name="smobileno1" class="element text" size="25"  value="" type="text"  tabindex="57"> </td>
		<td><input id="smobileno1error" name= "smobileno1error"readonly="true"  maxlength="200" style="border: none"/></td>
		</tr>
		
		
		<tr><td>Date Of Birth*</td>
<td width="400">
<span>
			<input id="selement_5_1" name="selement_5_1" class="element text" size="2" readonly="true" maxlength="2" value="" type="text"> /
			<label for="selement_5_1">MM</label>
		</span>
		<span>
			<input id="selement_5_2" name="selement_5_2" class="element text" size="2" readonly="true" maxlength="2" value="" type="text"> /
			<label for="selement_5_2">DD</label>
		</span>
		<span>
	 		<input id="selement_5_3" name="selement_5_3" class="element text" size="4" readonly="true" maxlength="4" value="" type="text">
			<label for="selement_5_3">YYYY</label>
		</span>
	<span id="calendar_6">
			<img id="cal_img_6" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		</td>
		</tr>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "selement_5_3",
			baseField    : "selement_5",
			displayArea  : "calendar_6",
			button		 : "cal_img_6",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		
		





</table>
<br/>
<br />

	<table cellspacing=1 cols=3 cellpadding=1 width=597 align="center" >
		<tr width="450">
		<td width="450"><input id="seducationlevelerror" name="seducationlevelerror" readonly="true" tabindex="58"  style="border: none"/></td></tr>
<tr width="450">		<td width="450" align="left" ><input id="scollegeinformationerror" name="scollegeinformationerror" readonly="true"   style="border: none"/></td>
		
		</tr>
		</table>


	<table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Spouse Education Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
	 
    </tr>
</table>		


<table width="600"  style="border: 1px solid black;" border="0" cellspacing="1" cellpadding="1" align="center">
	<tr >
      <td width="250" align="left" bgcolor="#FFFFFF">Number of years:</td>	 
      <td><?php echo $rowUser[spousenoofyears]?></td> 
	 </tr>
	  
	  
	  <tr>
	  <td width="250" align="left" bgcolor="#FFFFFF">Confirm Highest Level of Education:</td>	  
	  <td><?php echo $rowUser[spouseeducationlevel]?></td>
	  
	  </tr>
	  
	  <tr>
	   <td width="93" bgcolor="#FFFFFF">College Information:</td>	  
	  <td>
	  <?php echo $rowUser[spousecollegeinformation] ?> 
	  </td>
	  </tr>
	  </table>
	
	
	
	<table >
		<tr>
		<td><input id="fm1error" name="fm1error" readonly="true"   style="border: none"/></td>
		</tr>
		</table>
	
		<table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Spouse Work Experince:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="wkScore" name="wkScore" class="element text small" value="<?php echo $row[wkScore] ?>" type="text" onchange="calcScore()"></td>
     
    </tr>
</table>		


<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">		<tr align="center">

      <td width="85" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" height="14" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2" color="#7b1316"><b>From</b></font></td>
	  <td colspan="2" height="14" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2" color="#7b1316"><b>To</b></font></td>
      <td width="259" height="14" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Job
        Title/Description</b></font> </td>
    </tr>
	
	<tr align="center">
      <td width="93" bgcolor="#FFFFFF">&nbsp; </td>

      <td width="54" height="24" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Month</b></font></td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Year</b></font></div>
      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Month</b></font></div>
      </td>

      <td width="56" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>Year</b></font></div>
      </td>
      <td width="259" height="24" bgcolor="#FFFFFF">
       
      </td>
    </tr>
	
	 <tr>

      <td width="85" nowrap bgcolor="#EFEFEF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;Present
        Job</b></font></td>
      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[sfm1]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[sfy1]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[stm1]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[sty1]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[sjob1]?>
      </td>
    </tr>
    <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;2nd
        last</b></font></td>
     

      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[sfm2]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[sfy2]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[stm2]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[sty2]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[sjob2]?>
      </td>

    </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;3rd
        last</b></font></td>
      
      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[sfm3]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[sfy3]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[stm3]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[sty3]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[sjob3]?>
      </td>

      </tr>
	
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;Other</b></font></td>
    
      <td width="54" height="24" bgcolor="#EFEFEF"><?php echo $rowUser[sfmother]?></td>
      

      <td width="64" bgcolor="#EFEFEF" height="24"><?php echo $rowUser[sfyother]?> </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
       <?php echo $rowUser[stmother]?>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <?php echo $rowUser[styother]?>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
      <?php echo $rowUser[sjobother]?>
      </td>
    </tr>
	
	 

		</table>
			
	
		<table width="1000" >
		<tr>
		<td width="1000"><input id="sengserror" name="sengserror" readonly="true" width="1000"  style="border: none"/></td></tr>
		</table>	
				<table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Spouse Language Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="LanScore" name="LanScore" class="element text small" value="<?php echo $row[LanScore] ?>" type="text" onchange="calcScore()"></td>
    </tr>
</table>		


<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">	
    
    <tr align="center">
      <td width="218" bgcolor="#FFFFFF">&nbsp; </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"><font size="2" face="verdana,Arial, Helvetica, sans-serif">&nbsp;Speak</font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">Write</font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">
        <div align="center"><font size="2" face="verdana,Arial, Helvetica, sans-serif">&nbsp;Read</font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"><font size="2" face="verdana,Arial, Helvetica, sans-serif">&nbsp;Understand</font></div>

      </td>
    </tr>
    <tr align="center">
      <td width="218" bgcolor="#FFFFFF">
        <div align="center"><font size="-1" face="verdana,Arial, Helvetica, sans-serif"><b>English</b></font></div>
      </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">

          <?php echo $rowUser[sengs]?>
          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
         <?php echo $rowUser[sengw]?>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <?php echo $rowUser[sengr]?>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
         <?php echo $rowUser[sengu]?>
          </font></div>
      </td>

    </tr>
    <tr align="center">
      <td width="218" bgcolor="#FFFFFF">
        <div align="center"><font size="-1" face="verdana,Arial, Helvetica, sans-serif"><b>French</b></font></div>
      </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
         <?php echo $rowUser[sfres]?>

          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
                   <?php echo $rowUser[sfrew]?>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
                  <?php echo $rowUser[sfrer]?>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
                   <?php echo $rowUser[sfreu]?>
          </font></div>
      </td>

    </tr>
    <tr align="center">
      <td colspan="5" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF">m</font></div>
      </td>
    </tr>
  </table>
  <br/><br/>
  
  <!--Additional questions-->
  
  	<table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Complete Form Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
	  <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="CFScore" name="CFScore" class="element text small" value="<?php echo $row[CFScore] ?>" type="text" onchange="calcScore()"></td>
     
    </tr>
</table>		


<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">	
			 <tr bgcolor="#FFFFFF">
      <td>
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Do
          you have a job offer from a prospective Canadian employer ?</font></div>
      </td>

      <td>
    
      <?php echo $rowUser[cjob]?>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="477">
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Do
          you have HRDC confirmed offer of employment in Canada ? </font></div>
      </td>
         <td>
    
      <?php echo $rowUser[coffer]?>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="477">
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Have
          you worked in Canada for 1 year or more in full-time authorised<br>
          &nbsp; employment ?</font></div>
      </td>

         <td>
    
      <?php echo $rowUser[cwork]?>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="477">
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Have
          you studied in Canada for 2 years or more full-time authorised<br>
          &nbsp;&nbsp;post-secondary study ?</font></div>
      </td>

       <td>
    
      <?php echo $rowUser[cstudy]?>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="477">
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">Do
          you have a relative who is a Canadian Citizen or Permanent Resident
          ?Only <u>living</u> relatives who are residing in Canada and who are direct blood relatives to you or your Spouse/Partner,<b><font color="#7b1316"> NOT</font></b>

          cousins and/or family friends.</font></div>
      </td>
        <td>
    
      <?php echo $rowUser[crel]?>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="2" height="6"><font face="verdana,Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">&nbsp;&nbsp;If</font>
      </td>
    </tr>
            </table>
			
			
			
			<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">	
			<tr  bgcolor=#6890A3 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Admin Analysis:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Score:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b></b></font></td>  		
      <td><input id="totalScore" name="TotalScore" class="element text small" readonly="true" value="<?php echo $row[score] ?>" type="text"></td>
    </tr>
	</table>
		<table width="597" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">
    <tr bgcolor="#6890A3">
      
 </tr>
      <tr bgcolor="#FFFFFF">
      <td>
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">Comments:</font></div>
      </td>
      <td align="center" valign="middle">

       <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
         <!-- <input type="text" name="comments" size="40" id="comments"/> -->
         <textarea name = 'comments' rows="5" cols="70" name="quote"  wrap="physical"><?php echo $row[comments] ?></textarea>
         </font></div>
      </td>
    </tr>  
    
    </tr>
      <tr bgcolor="#FFFFFF">
      <td width="0">
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">Is eligible?</font></div>
      </td>
      <td align="center" valign="middle">

        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="celigible">
           <option value="<?php echo $row[eligibility]?>" selected="selected"><?php echo $row[eligibility]?></option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
          </select>
          </font></div>

      </td>
	  
    </tr>  
	
    </tr>
	
    </table>
			
			
<table>
<tr><td>
<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
</td></tr>
</table>
		</form>	
      
        </div>
        
        
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2>Service Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="skilledworker.php">Skilled Worker</a></li>
            <li><a href="arrangedemployment.php">Arranged Employment</a></li>
            <li><a href="investorprogram.php">Investor Program</a></li>
            <li><a href="studentservice.php">Student Service</a></li>
            <li><a href="corporateimmigration.php">Corporate Immigration</a></li>
            <li><a href="clienttestimonial.php">Client Testimonial</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2><span>Other Links</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="canadiansolicitor.php" title="Lawyer">Canadian Solicitor</a><br /></li>
            <li><a href="InitialAssessmentPersonalDetails.php">Online Assessment</a></li>
             <li><a href="ImmigrationProcess.php">Our Immigration Process</a><br /></li>
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Bar Associations</span></h2>
        <a href="www.cba.org"><img src="images/cba.jpg" width="58" height="58" alt="pix" /></a> <a href="www.lsuc.on.ca"><img src="images/isuc.gif" width="58" height="58" alt="pix" /></a> <a href="www.oba.org"><img src="images/oba_scales.gif" width="58" height="58" alt="pix" /></a> </div>
      <div class="col c2">
        <h2><span> </span></h2>
         
      </div>
       <div class="col c3">
        <h2><span>Contact US</span></h2>
        
        <p><strong>Telephone:</strong>+416-840-0525<br />
		<strong>Fax:</strong>416-840-056<br />
          <strong>Address:</strong> 2323 Younge Street,Suite 202 <br />Toronto, Ontario M4P 2C9
<br />Canada<br/>
          <strong>E-mail:</strong> <a href="mailto:hkaminker@kaminkerlaw.com">hkaminker@kaminkerlaw.com</a></p>        </p>
   </div>
      <div class="clr"></div>
    </div>
    <div class="footer">
      <p class="lf">Copyright (c) 2011 All rights reserved.</p>
     
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
