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
<!--<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>-->
<!-- CuFon ends -->
<script type="text/javascript">
function notEmpty(){

//First Name Validation

if(document.getElementById("fname").value == ""){
 	
	
	document.getElementById('fnameerror').value= "First Name required";
	document.getElementById("fnameerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("fname").value;
		var allValid = true;
		for (i = 0;  i < checkStr.length;  i++)
		{
			ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
			if (j == checkOK.length)
			{
				allValid = false;
				break;
			}
		}
		if (!allValid)
		{
			document.getElementById("fnameerror").value="";
			
			

			document.getElementById("fnameerror").value="Only Characters Allow";
			document.getElementById("fnameerror").style.color="#FF6600";
			return false;
			
		}		
		 if ( document.getElementById("fname").value.length > 20)
		{
		   
		   document.getElementById("fnameerror").value="";
			
			

			document.getElementById("fnameerror").value="Only 20 Characters Allow";
			document.getElementById("fnameerror").style.color="#FF6600";
			return (false);
		}


//Last Name Validation
if(document.getElementById("lname").value == ""){

	document.getElementById("fnameerror").value="";
	
	

	document.getElementById('lnameerror').value= "Last Name Required";
	document.getElementById("lnameerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("lname").value;
		var allValid = true;
		for (i = 0;  i < checkStr.length;  i++)
		{
			ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
			if (j == checkOK.length)
			{
				allValid = false;
				break;
			}
		}
		if (!allValid)
		{
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			
			
			document.getElementById("lnameerror").value="Only Characters Allow";
			document.getElementById("lnameerror").style.color="#FF6600";
			return false;
			
		}		
		
//Email Validation


if(document.getElementById("email").value == ""){

	document.getElementById("fnameerror").value="";
	
	

	document.getElementById('emailerror').value= "Email Required";
	document.getElementById("emailerror").style.color="#FF6600";
	return false;
	
	}	

 var checkEmail = "@.";
 
var checkStr = document.getElementById("email").value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
document.getElementById("emailerror").value="Invalid Email";
document.getElementById("emailerror").style.color="#FF6600";
return (false);
}
	
		
//MobileNo Validation


if(document.getElementById("mobileno").value == ""){

			
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			
			
			document.getElementById("emailerror").value="";
	document.getElementById('mobilenoerror').value= "Mobile Required";
	document.getElementById("mobilenoerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "0123456789";
		var checkStr = document.getElementById("mobileno1").value;
		var allValid = true;
		for (i = 0;  i < checkStr.length;  i++)
		{
			ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
				if (ch == checkOK.charAt(j))
					break;
			if (j == checkOK.length)
			{
				allValid = false;
				break;
			}
		}
		if (!allValid)
		{
	
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			
			document.getElementById("emailerror").value="";
			document.getElementById("mobilenoerror").value="Only Numeric Allowed";
			document.getElementById("mobilenoerror").style.color="#FF6600";
			return false;
			
		}	
		return true;
	
}
</script>
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
          <li  class="active"><a href="contactus.php">Contact US</a></li>
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
          <h2><span>Contact US</span></h2>
          <div class="clr"></div>
          
          <img src="images/img_1.jpg" width="613" height="179" alt="image" />
          <div class="clr"></div>
          <form id = "registeruser"action="mail.php" method="post" onsubmit="return notEmpty()">
	  <table width="800">
         		<tr>
				<td>First Name*</td>
				<td><input id="fname" name= "fname" class="element text" maxlength="255" size="25" value="" tabindex="3"/></td>
				<td><input id="fnameerror" name= "fnameerror" readonly="true"  maxlength="200" style="border: none"/></td>
				</tr>
				<tr>
				<td>Last Name*</td>
				<td><input id="lname" name= "lname" class="element text" maxlength="255" size="25" value="" tabindex="3"/></td>
				<td><input id="lnameerror" name= "lnameerror" readonly="true"  maxlength="200" style="border: none"/></td>
				</tr>
							
				<tr>
				<td>Email*</td>
				<td><input id="email" name="email" class="element text" type="text" maxlength="255"  size="25" value="" tabindex="4"/> </td>
				<td><input id="emailerror" name= "emailerror"readonly="true"  maxlength="200" style="border: none"/></td>
				</tr>	

				<tr>
				<td>Mobile*</td>
				<td><input id="mobileno" name="mobileno" class="element text" size="25"  value="" type="text" tabindex="5"> </td>
				<td><input id="mobilen1error" name= "mobilenoerror"readonly="true"  maxlength="200" style="border: none"/></td>
				</tr>
				
							
				<tr>
	  			 <td  bgcolor="#FFFFFF">comments</td>	  
				 <td>
	  			<textarea name = 'comments' rows="5" cols="60" name="quote"  wrap="physical"></textarea>
	 
	 			 </td>
			  </tr>
        	 </table>
         <table>
		<tr><td>
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Send mail" />
		</td></tr>
		</table>
         </form>
         <table>
        <tr><h3>Toronto, Ontario, Canada Office:</h3></tr>
       <tr><iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=480+University+Avenue,+Suite+1600+Toronto,+Ontario,+Canada,+M5G+1V2&amp;aq=&amp;sll=22.321385,73.162988&amp;sspn=0.035968,0.077162&amp;ie=UTF8&amp;hq=&amp;hnear=480+University+Ave+%231600,+Toronto,+Ontario+M5G+1V6,+Canada&amp;z=14&amp;ll=43.655068,-79.388885&amp;output=embed"></iframe><br />
	   </tr>
	  </table>
	  <table>
	   
		<tr><td><strong>Fax:</strong> +416-840-0506<br /></td></tr>
          <tr><td><strong>Contact No:</strong> +416-840-0506<br />
          <strong>Address:</strong> 480 University Avenue, Suite 1600
									Toronto, Ontario, Canada, M5G 1V2<br /></td></tr>
         <tr><td> <strong>E-mail:</strong> <a href="mailto:vadodara@ge-immigration.com">vadodara@ge-immigration.com</a></p></td></tr>
		  
		
		</table>
          </div>
        
         
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2>Service Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="skilledworker.php">Skilled Worker</a></li>
			<li><a href="provinical.php">Provincial Nominee Program</a></li>
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
        <a href="www.Bar Associations.org"><img src="images/cba.jpg" width="58" height="58" alt="pix" /></a> <a href="www.lsuc.on.ca"><img src="images/isuc.gif" width="58" height="58" alt="pix" /></a> <a href="www.oba.org"><img src="images/oba_scales.gif" width="58" height="58" alt="pix" /></a> </div>
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
