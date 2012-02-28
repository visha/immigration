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
function notEmpty(){

//User Name Validation
	if(document.getElementById("username").value == ""){
	document.getElementById('unameerror').value= "Required";
	document.getElementById("unameerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("username").value;
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
			document.getElementById("unameerror").value="";
			document.getElementById("unameerror").value="Only Characters are allowed";
			document.getElementById("unameerror").style.color="#FF6600";
			return false;
			
		}		
		 if ( document.getElementById("username").value.length > 20)
		{
		   
		   document.getElementById("unameerror").value="";
			document.getElementById("unameerror").value="Max 20 characters allowed";
			document.getElementById("unameerror").style.color="#FF6600";
			return (false);
		}

//Password Validation
		if(document.getElementById("pwd").value == ""){
		document.getElementById("unameerror").value="";
			document.getElementById('pwderror').value= "Required";
			document.getElementById("pwderror").style.color="#FF6600";
			return false;
		}	
	  if ( document.getElementById("pwd").value.length > 20)
		{
		   
		   document.getElementById("unameerror").value="";
		   document.getElementById("pwderror").value="";
			document.getElementById("pwderror").value="Max 20 characters allowed";
			document.getElementById("pwderror").style.color="#FF6600";
			return (false);
		}


//First Name Validation

if(document.getElementById("fname").value == ""){
 	document.getElementById("unameerror").value="";
	document.getElementById("pwderror").value="";
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
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";

			document.getElementById("fnameerror").value="Only Characters Allow";
			document.getElementById("fnameerror").style.color="#FF6600";
			return false;
			
		}		
		 if ( document.getElementById("fname").value.length > 20)
		{
		   
		   document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";

			document.getElementById("fnameerror").value="Only 20 Characters Allow";
			document.getElementById("fnameerror").style.color="#FF6600";
			return (false);
		}


//Last Name Validation
if(document.getElementById("lname").value == ""){

	document.getElementById("fnameerror").value="";
	document.getElementById("unameerror").value="";
	document.getElementById("pwderror").value="";

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
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("lnameerror").value="Only Characters Allow";
			document.getElementById("lnameerror").style.color="#FF6600";
			return false;
			
		}		
		
//Email Validation


if(document.getElementById("email").value == ""){

	document.getElementById("fnameerror").value="";
	document.getElementById("unameerror").value="";
	document.getElementById("pwderror").value="";
	document.getElementById("lnameerror").value="";
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

//Street Address1
if(document.getElementById("stradd").value == ""){

	document.getElementById("lnameerror").value="";
	document.getElementById("fnameerror").value="";
	document.getElementById("unameerror").value="";
	document.getElementById("pwderror").value="";
	document.getElementById("emailerror").value="";
	document.getElementById('stradderror').value= "Address Required";
	document.getElementById("stradderror").style.color="#FF6600";
	return false;
}	
	
//City Validation
if(document.getElementById("city").value == ""){
	document.getElementById("stradderror").value="";
	document.getElementById("lnameerror").value="";
	document.getElementById("fnameerror").value="";
	document.getElementById("unameerror").value="";
	document.getElementById("pwderror").value="";
	document.getElementById("addr2error").value="";
		document.getElementById("emailerror").value="";
	document.getElementById('cityerror').value= "City required";
	document.getElementById("cityerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("city").value;
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
		
			document.getElementById("stradderror").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("addr2error").value="";
			document.getElementById("cityerror").value="";
				document.getElementById("emailerror").value="";
			document.getElementById("cityerror").value="Only Characters Allow";
			document.getElementById("cityerror").style.color="#FF6600";
			return false;
			
		}		
	
//State Validation

if(document.getElementById("state").value == ""){

			document.getElementById("stradderror").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
				document.getElementById("emailerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("addr2error").value="";
			document.getElementById("cityerror").value="";
	document.getElementById('stateerror').value= "State required";
	document.getElementById("stateerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("state").value;
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
			document.getElementById("stradderror").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("cityerror").value="";
			document.getElementById("stateerror").value="";
				document.getElementById("emailerror").value="";
			document.getElementById("stateerror").value="Only Characters Allowed";
			document.getElementById("stateerror").style.color="#FF6600";
			return false;
			
		}		
		
//MobileNo Validation


if(document.getElementById("mobileno1").value == ""){

			document.getElementById("stradderror").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("stateerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("addr2error").value="";
			document.getElementById("cityerror").value="";
			document.getElementById("emailerror").value="";
	document.getElementById('mobileno1error').value= "Mobile Required";
	document.getElementById("mobileno1error").style.color="#FF6600";
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
			document.getElementById("stradderror").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("emailerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("cityerror").value="";
			document.getElementById("stateerror").value="";
			document.getElementById("mobileno1error").value="Only Numeric Allowed";
			document.getElementById("mobileno1error").style.color="#FF6600";
			return false;
			
		}		

//Business Number Validation


if(document.getElementById("bussinessno").value == ""){

			document.getElementById("stradderror").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("mobileno1error").value="";
			document.getElementById("addr2error").value="";
			document.getElementById("cityerror").value="";
	document.getElementById('bussinessnoerror').value= "Business No Required";
	document.getElementById("bussinessnoerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "0123456789";
		var checkStr = document.getElementById("bussinessno").value;
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
		
		
			document.getElementById("stradderror").value="";
			document.getElementById("mobileno1error").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("cityerror").value="";
			document.getElementById("stateerror").value="";
			document.getElementById("bussinessnoerror").value="Only Numeric Allowed";
			document.getElementById("bussinessnoerror").style.color="#FF6600";
			return false;
			
		}		
		
		
//Home Validation

if(document.getElementById("homeno").value == ""){

			document.getElementById("stradderror").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("bussinessnoerror").value="";			
			document.getElementById("addr2error").value="";
			document.getElementById("cityerror").value="";
	document.getElementById('homenoerror').value= "Home No Required";
	document.getElementById("homenoerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "0123456789";
		var checkStr = document.getElementById("homeno").value;
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
		
		
			document.getElementById("stradderror").value="";
			document.getElementById("mobileno1error").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("cityerror").value="";
			document.getElementById("stateerror").value="";
			document.getElementById("bussinessnoerror").value="";
			document.getElementById("homenoerror").value="Only Numeric Allowed";
			document.getElementById("homenoerror").style.color="#FF6600";
			return false;
			
		}		
//Fax No Validation
var checkOK = "0123456789";
		var checkStr = document.getElementById("faxno").value;
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
		
		
			document.getElementById("stradderror").value="";
			document.getElementById("mobileno1error").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("cityerror").value="";
			document.getElementById("stateerror").value="";
			document.getElementById("bussinessnoerror").value="";
			document.getElementById("faxnoerror").value="Only Numeric Allowed";
			document.getElementById("faxnoerror").style.color="#FF6600";
			return false;
			
		}		




		//Children Validation
		
		
		var checkOK = "0123456789";
		var checkStr = document.getElementById("children").value;
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
		
		
			document.getElementById("stradderror").value="";
			document.getElementById("mobileno1error").value="";
			document.getElementById("lnameerror").value="";
			document.getElementById("fnameerror").value="";
			document.getElementById("unameerror").value="";
			document.getElementById("pwderror").value="";
			document.getElementById("cityerror").value="";
			document.getElementById("stateerror").value="";
			document.getElementById("bussinessnoerror").value="";
			document.getElementById("childrenerror").value="Only Numeric Allowed";
			document.getElementById("childrenerror").style.color="#FF6600";
			return false;
			
		}		

		
//Education Details Validation

if (document.getElementById('educationlevel').selectedIndex == 0)
		{

			document.getElementById('educationlevelerror').value= "Select All Values ";
			document.getElementById("educationlevelerror").style.color="#FF6600";
			return false;			
		}
		
		if(document.getElementById("collegeinformation").value == ""){
					document.getElementById('educationlevelerror').value="";
			document.getElementById('educationlevelerror').value= "College Info Required";
			document.getElementById("educationlevelerror").style.color="#FF6600";
			return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("collegeinformation").value;
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

			document.getElementById("educationlevelerror").value="";
			document.getElementById("educationlevelerror").value="Only Characters are allowed";
			document.getElementById("educationlevelerror").style.color="#FF6600";
			return false;
			
		}		
		
		//Language Validation
		
		if (document.getElementById('engs').selectedIndex == 0)
		{
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		
		if (document.getElementById('engw').selectedIndex == 0)
		{
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('engr').selectedIndex == 0)
		{
		
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('engu').selectedIndex == 0)
		{
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		
		if (document.getElementById('fres').selectedIndex == 0)
		{
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		
		if (document.getElementById('frew').selectedIndex == 0)
		{
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('frer').selectedIndex == 0)
		{
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('freu').selectedIndex == 0)
		{
			document.getElementById('engserror').value= "Select All Values";
			document.getElementById("educationlevelerror").value=""
			document.getElementById("engserror").style.color="#FF6600";
			return false;			
		}
		
		//Financial Information Validation
		
		if(document.getElementById("financialinfo").value == ""){
	document.getElementById('financialinfoerror').value= "Net Worth required";
	document.getElementById('engserror').value="";
	document.getElementById("financialinfoerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "1234567890";
		var checkStr = document.getElementById("financialinfo").value;
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
			document.getElementById("financialinfoerror").value="";
			document.getElementById('engserror').value="";
			document.getElementById("financialinfoerror").value="Only Numeric Allowed";
			document.getElementById("financialinfoerror").style.color="#FF6600";
			return false;
			
		}		
		
		
		//Spouse Detail Validation
		
		if(document.getElementById('marstatus').value!="Single")
		{
		
		
		
		if(document.getElementById("sfname").value == ""){
 	document.getElementById('sfnameerror').value= "First Name required";
	document.getElementById("sfnameerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("sfname").value;
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
			document.getElementById("sfnameerror").value="Only Characters Allow";
			document.getElementById("sfnameerror").style.color="#FF6600";
			return false;
			
		}		
		 if ( document.getElementById("sfname").value.length > 20)
		{
		   
		    document.getElementById("sfnameerror").value="";
			document.getElementById("sfnameerror").value="Only 20 Characters Allow";
			document.getElementById("fnameerror").style.color="#FF6600";
			return (false);
		}


//Last Name Validation
if(document.getElementById("slname").value == ""){

	document.getElementById("sfnameerror").value="";
	document.getElementById('slnameerror').value= "Last Name Required";
	document.getElementById("slnameerror").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("slname").value;
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
			document.getElementById("slnameerror").value="";
			document.getElementById("sfnameerror").value="";
			document.getElementById("slnameerror").value="Only Characters Allow";
			document.getElementById("slnameerror").style.color="#FF6600";
			return false;
			
		}		
		
//Email Validation


if(document.getElementById("semail").value == ""){

	document.getElementById("sfnameerror").value="";
	document.getElementById('semailerror').value= "Email Required";
	document.getElementById("semailerror").style.color="#FF6600";
	return false;
	
	}	

 var checkEmail = "@.";
 
var checkStr = document.getElementById("semail").value;
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
document.getElementById("slnameerror").value="";
document.getElementById("sfnameerror").value="";
document.getElementById("semailerror").value="Invalid Email";
			document.getElementById("slnameerror").value="";
document.getElementById("semailerror").style.color="#FF6600";
return (false);
}


if(document.getElementById("smobileno1").value == ""){

		
			document.getElementById("slnameerror").value="";
			document.getElementById("sfnameerror").value="";
			document.getElementById("semailerror").value="";
			document.getElementById('smobileno1error').value= "Mobile Required";
			document.getElementById("smobileno1error").style.color="#FF6600";
	return false;
	
	}	
	 var checkOK = "0123456789";
		var checkStr = document.getElementById("smobileno1").value;
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
			
			document.getElementById("slnameerror").value="";
			document.getElementById("sfnameerror").value="";

			document.getElementById("smobileno1error").value="Only Numeric Allowed";
			document.getElementById("smobileno1error").style.color="#FF6600";
			return false;
			
		}		




		if (document.getElementById('seducationlevel').selectedIndex == 0)
		{
			document.getElementById('seducationlevelerror').value= "Select All Values ";
			document.getElementById("seducationlevelerror").style.color="#FF6600";
			document.getElementById('smobileno1error').value="";
			return false;			
		}
		
		if(document.getElementById("scollegeinformation").value == ""){
					document.getElementById('seducationlevelerror').value="";
					document.getElementById('smobileno1error').value="";
			document.getElementById('scollegeinformationerror').value= "College Info required";
			document.getElementById("scollegeinformationerror").style.color="#FF6600";
			return false;
	
	}	
	 var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZa bcdefghijklmnopqrstuvwxyz()/";
		var checkStr = document.getElementById("scollegeinformation").value;
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
			document.getElementById('seducationlevelerror').value="";
			document.getElementById("scollegeinformationerror").value="";
			document.getElementById("scollegeinformationerror").value="Only Characters Allowed";
			document.getElementById("scollegeinformationerror").style.color="#FF6600";
			return false;
			
		}	
		
		
		if (document.getElementById('sengs').selectedIndex == 0)
		{
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
		
		
		if (document.getElementById('sengw').selectedIndex == 0)
		{
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('sengr').selectedIndex == 0)
		{
		
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('sengu').selectedIndex == 0)
		{
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
		
		
		if (document.getElementById('sfres').selectedIndex == 0)
		{
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
		
		
		if (document.getElementById('sfrew').selectedIndex == 0)
		{
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('sfrer').selectedIndex == 0)
		{
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
		
		if (document.getElementById('sfreu').selectedIndex == 0)
		{
			document.getElementById('sengserror').value= "Select All Values";
			document.getElementById("seducationlevelerror").value=""
			document.getElementById("sengserror").style.color="#FF6600";
			return false;			
		}
			
		}
		//Additional Question validation
		if(document.getElementById("Declarationyes").checked ==false){
	document.getElementById('Declarationerror').value= "Accept Declaration";
	document.getElementById("Declarationerror").style.color="#FF6600";
	return false;
	}
		
	return true;
	
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
          
        
        
		  
		  
 			<form id="form_personal_details" class="appnitro"  method="post" onsubmit="return notEmpty()"  action="insert.php">
		  
          <table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Personal Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
     
    </tr>
</table>		


<table width="600"  style="border: 1px solid black;" border="0" cellspacing="1" cellpadding="1" align="center">
<tr>
<td>UserName*</td>
<td><input id="username" name="username" class="element text" type="text" maxlength="30" size="25" tabindex="1"/> 		</td>
<td><input id="unameerror" name="unameerror" readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	

<tr>
<td>Password*</td>
<td><input id="pwd" name="pwd" class="element text" type="password" minlength = "8" tabindex="2" maxlength="15" size="25" value=""/>	</td>
<td><input id="pwderror" name="pwderror" readonly="true"  maxlength="200" style="border: none"/></td>
</tr>		
		
		
		<tr>
<td>Security Question*</td>
<td><select class="element select large" id="SecurityQns" name="SecurityQns" tabindex="3"> 
			<option value="Who is the author of your favourite book?" selected="selected">Who is the author of your favourite book? </option>
<option value="Who is childhood hero?" >Who is childhood hero?</option>
<option value="what is the name of your first school?" >what is the name of your first school?</option>
<option value="What is the name of your favourite pet?" >What is the name of your favourite pet?</option>

		</select></td>
<td></td>
</tr>		

		<tr>
<td>Security Answer*</td>
<td><input id="securityAns" name="securityAns" class="element text large" type="text" maxlength="255" value="" tabindex="4"/> </td>
<td><input id="securityerror" name="securityerror" readonly="true"  maxlength="500" style="border: none"/></td>
</tr>		


	<tr>
<td width="150">First Name*</td>
<td width="300">
<select id="prefix" name="prefix" tabindex="5"> 			
<option value="Mr." >Mr.</option>
<option value="Ms." >Ms.</option>
<option value="Mrs." >Mrs.</option>
</select><input id="fname" name= "fname" class="element text" maxlength="255" size="25" value=""  tabindex="6"/></td>
<td width="300"><input id="fnameerror" name= "fnameerror" readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	


<tr>
<td>Last Name*</td>
<td><input id="lname" name= "lname" class="element text" maxlength="255" size="25" value="" tabindex="7"/></td>
<td><input id="lnameerror" name= "lnameerror" readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	

<tr>
<td>Email*</td>
<td><input id="email" name="email" class="element text" type="text" maxlength="255"  size="25" value="" tabindex="8"/> </td>
<td><input id="emailerror" name= "emailerror"readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	


<tr>
<td>Street Address*</td>
<td><input id="stradd" name="stradd" class="element text large" value="" type="text" tabindex="9"></td>
<td><input id="stradderror" name= "stradderror"readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	


<tr>
<td>Street Address 2</td>
<td><input id="addr2" name="addr2" class="element text large" value="" type="text" tabindex="10"></td>
<td><input id="addr2error" name= "addr2error"readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	

<tr>
<td>City*</td>
<td><input id="city" name="city" class="element text" value=""  size="25" type="text" tabindex="11"></td>
<td><input id="cityerror" name= "cityerror"readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	

<tr>
<td>State / Province / Region*</td>
<td><input id="state" name="state" class="element text"  size="25" value="" type="text" tabindex="12"></td>
<td><input id="stateerror" name= "stateerror"readonly="true"  maxlength="200" style="border: none"/></td>
</tr>


<tr>
<td>PostalCode*</td>
<td><input id="postcode" name="postcode" class="element text" maxlength="15" value=""  size="25" type="text" tabindex="13"></td>
<td><input id="postcodeerror" name= "postcodeerror"readonly="true"  maxlength="200" style="border: none"/></td>
</tr>	


<tr>
<td>Country*</td>
<td><select class="element select " id="country" name="country" tabindex="14" > 
			
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select></td>
<td></td>
</tr>			

<tr>
		<td>Mobile*</td>
		<td><input id="mobileno1" name="mobileno1" class="element text" size="25"  value="" type="text" tabindex="14"> </td>
		<td><input id="mobileno1error" name= "mobileno1error"readonly="true"  maxlength="200" style="border: none"/></td>
		</tr>

		<tr>
		<td>Business*</td>
		<td><input id="bussinessno" name="bussinessno" class="element text" size="25" maxlength="25" value="" type="text" tabindex="15"> </td>
		<td><input id="bussinessnoerror" name= "bussinessnoerror"readonly="true"  maxlength="200" style="border: none"/></td>
		</tr>
		
		<tr>
		<td>Home*</td>
		<td><input id="homeno" name="homeno" class="element text" size="25" maxlength="25" value="" type="text" tabindex="16"> </td>
		<td><input id="homenoerror" name= "homenoerror"readonly="true"  maxlength="200" style="border: none"/></td>
		</tr>
		
		<tr>
		<td>Fax</td>
		<td><input id="faxno" name="faxno" class="element text" size="25" maxlength="25" value="" type="text" tabindex="17"> </td>
		<td><input id="faxnoerror" name= "faxnoerror"readonly="true"  maxlength="200" style="border: none"/></td>
		</tr>
		
		
<tr><td>Date Of Birth*</td>
<td>
<span>
			<input id="element_5_1" name="element_5_1" class="element text" size="2" readonly="true" maxlength="2" value="" type="text" tabindex="18"> /
			<label for="element_5_1">MM</label>
		</span>
		<span>
			<input id="element_5_2" name="element_5_2" class="element text" size="2" readonly="true" maxlength="2" value="" type="text" tabindex="19"> /
			<label for="element_5_2">DD</label>
		</span>
		<span>
	 		<input id="element_5_3" name="element_5_3" class="element text" size="4" readonly="true" maxlength="4" value="" type="text" tabindex="20">
			<label for="element_5_3">YYYY</label>
		</span>
	<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		</td>
		</tr>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_5_3",
			baseField    : "element_5",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		
		<tr>
		<td>Gender*</td>
		<td><select class="element select medium" id="gender" name="gender" tabindex="19"> 
		<option value="M" selected="selected">Male</option>
		<option value="F" >Female</option>
		</select></td>
		</tr>
		
		<tr>
		<td>Marital Status*</td>
		<td><select class="element select medium" id="marstatus" name="marstatus" tabindex="20"> 
		<option value="Single" selected="selected">Single</option>
		<option value="Married" >Married</option>
		<option value="Divorced" >Divorced</option>
		<option value="Widowed" >Widowed</option>
		</select></td>
		</tr>
		
		
		<tr>
		<td>Children</td>
		<td><input id="children" name="children" class="element text small" value="" type="text" tabindex="21"></td>
		<td><input id="childrenerror" name= "childrenerror"readonly="true"  maxlength="200" style="border: none"/></td>
		</tr>


</table>

<!-- Education Details -->
<br/><br/>

<table>
		<tr>
		<td ><input id="educationlevelerror" name="educationlevelerror" readonly="true"   style="border: none"/></td></tr>
		</table>



   <table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Educational Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
     
    </tr>
</table>		


<table width="600"  style="border: 1px solid black;" border="0" cellspacing="1" cellpadding="1" align="center">



	<tr align="center">
      <td width="250" align="left" bgcolor="#FFFFFF">Number of years:</td>	  
	  <td align="left" valign="bottom" width="301" bgcolor="#EFEFEF"><select id="noofyears" name="noofyears" tabindex="22"> 
			
			<option value="1">1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="6" >6</option>
		</select>	  
	  </td>
	  </tr>
	  
	  
	  <tr>
	  <td width="250" align="left" bgcolor="#FFFFFF">Confirm Highest Level of Education:</td>	  
	  <td>
	  <select class="element select medium" id="educationlevel" name="educationlevel" tabindex="23"> 
			<option value="0" selected="selected"></option>
          <option value="18">PhD</option>
          <option value="17">Master degree</option>
          <option value="16">Second Bachelor degree - 4 year +</option>
          <option value="15">Second Bachelor degree - 3 year</option>

          <option value="14">Second Bachelor degree - 2 year</option>
          <option value="13">First Bachelor degree - 4 year +</option>
          <option value="12">First Bachelor degree - 3 year</option>
          <option value="11">First Bachelor degree - 2 year</option>
          <option value="10">Diploma - 4 year</option>
          <option value="9">Diploma - 3 year</option>

          <option value="8">Diploma - 2 year</option>
          <option value="7">Diploma - 1 year</option>
          <option value="6">Certificate - 3 year</option>
          <option value="5">Certificate - 2 year</option>
          <option value="4">Certificate - 1 year</option>
          <option value="3">Apprenticeship</option>

          <option value="2">Secondary School</option>
          <option value="1">Primary School</option>

		</select>
	  </td>
	  
	  </tr>
	  
	  <tr>
	   <td width="93" bgcolor="#FFFFFF">College Information:</td>	  
	  <td>
	  <input name="collegeinformation" id="collegeinformation" type="text" tabindex="24"/> 
	  </td>
	  </tr>
	  </table>
	
<!-- Work Expereince -->

<br/><br/>

 <table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Work Expereince:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
     
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
      <td width="54" height="24" bgcolor="#EFEFEF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fm1" id="fm1" tabindex="25">
            <option value="0" selected></option>
            <option value="01">01</option>
            <option value="02">02</option>

            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>

            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          </font></div>
      </td>

      <td width="64" bgcolor="#EFEFEF" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fy1" tabindex="26">
            <option value="0" selected></option>
			<option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>

			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>

			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>

            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>

            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">

          <select name="tm1" tabindex="27">
            <option value="0" selected></option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>

            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>

            <option value="12">12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="ty1" tabindex="28">
            <option value="0" selected></option>

            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>

			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>

			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>

            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="job1" id="job1" size="40" maxlength="150">
          </font></div>

      </td>
    </tr>
    <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;2nd
        last</b></font></td>
      <td width="54" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fm2" tabindex="29">
            <option value="0" selected></option>

            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>

            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>

          </select>
          </font></div>
      </td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fy2" tabindex="30">
            <option value="0" selected></option>
            <option value="2020">2020</option>

			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>

			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>

			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>

            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>

      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="tm2" tabindex="31">
            <option value="0" selected></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>

            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>

            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#efefef" height="24">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="ty2" tabindex="32">
            <option value="0" selected></option>
            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>

			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>

			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>

            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>

            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="job2" value="" size="40" maxlength="100">
          </font> </div>
      </td>
    </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;3rd
        last</b></font></td>
      <td width="54" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fm3" tabindex="33">
            <option value="0" selected></option>

            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>

            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>

          </select>
          </font></div>
      </td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fy3" tabindex="34">
            <option value="0" selected></option>
            <option value="2020">2020</option>

			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>

			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>

			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>

            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>

      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="tm3" tabindex="35">
            <option value="0" selected></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>

            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>

            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#efefef" height="24">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="ty3" tabindex="36">
            <option value="0" selected></option>
            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>

			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>

			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>

            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>

            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="job3" value="" size="40" maxlength="100">
          </font> </div>
      </td>
    </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;4th Last</b></font></td>
      <td width="54" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fm4" tabindex="37">
            <option value="0" selected></option>

            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>

            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>

          </select>
          </font></div>
      </td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fy4" tabindex="38">
            <option value="0" selected></option>
            <option value="2020">2020</option>

			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>

			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>

			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>

            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>

      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="tm4" tabindex="39">
            <option value="0" selected></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>

            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>

            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#efefef" height="24">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="ty4" tabindex="40">
            <option value="0" selected></option>
            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>

			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>

			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>

            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>

            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="job4" value="" size="40" maxlength="100">
          </font> </div>
      </td>
    </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;Other</b></font></td>
      <td width="54" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fmother" tabindex="41">
            <option value="0" selected></option>

            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>

            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>

          </select>
          </font></div>
      </td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="fyother" tabindex="42">
            <option value="0" selected></option>
            <option value="2020">2020</option>

			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>

			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>

			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>

            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>

      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="tmother" tabindex="43">
            <option value="0" selected></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>

            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>

            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#efefef" height="24">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="tyother" tabindex="44">
            <option value="0" selected></option>
            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>

			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>

			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>

            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>

            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="job5" value="" size="40" maxlength="100">
          </font> </div>
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

          <select name="engs" size="1" id="engs" tabindex="45">
            <option value="0" selected>Select</option>
            <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>

          </select>
          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="engw" id="engw" tabindex="46">
            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="engr" id="engr" tabindex="47">
            <option value="" selected>Select</option>
            <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="engu" id="engu" tabindex="48">
            <option value="" selected>Select</option>
			 <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>

    </tr>
    <tr align="center">
      <td width="218" bgcolor="#FFFFFF">
        <div align="center"><font size="-1" face="verdana,Arial, Helvetica, sans-serif"><b>French</b></font></div>
      </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="fres" id="fres" tabindex="49">

            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>

          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="frew" id="frew" tabindex="50">
            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="frer" id="frer" tabindex="51">
            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="freu" id="freu" tabindex="52">
            <option value="" selected>Select</option>
 <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
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
     
    </tr>
</table>		


<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">
    <tr bgcolor="#6890A3">
      
<tr align="center">
      <td width="218" height="5" bgcolor="#FFFFFF" nowrap>
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="-1"><b>&nbsp;&nbsp;Personal Net Worth-&nbsp;&nbsp;in CDN Dollar($)</b></font></div>
      </td>

      <td colspan="4" height="5" bgcolor="#FFFFFF">
        <div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          &nbsp;&nbsp;
          <input type="text" name="financialinfo" size="40" id="financialinfo" tabindex="53"/>
	
		  
          </font></div>
		  </td>


    </tr>
      
    </tr>
    </table>
	
	
	<br/><br/>
	<!-- Spouse Details-->
	
	

<table cellspacing=1 cols=3 cellpadding=1 width=600 align="center" bgcolor="#AAAFB5">

    <tr  bgcolor=#696969 align="left" valign="top">
      <td colspan=2 background="images/step_bg.gif" height="24"><font size="2" face="verdana,Arial, Helvetica, sans-serif"><b>&nbsp;&nbsp;<font color="#FFFFFF">Spouse Details:-<a name="Step1"></a></font></b></font><font size="3" face="verdana,Arial, Helvetica, sans-serif" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
     
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
	<tr align="center">
      <td width="250" align="left" bgcolor="#FFFFFF">Number of years:</td>	  
	  <td align="left" valign="bottom" width="400" bgcolor="#EFEFEF"><select id="snoofyears" tabindex="59" name="snoofyears"> 
			
			<option value="1">1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="6" >6</option>
		</select>	  
	  </td>
	  </tr>
	  
	  
	  <tr>
	  <td width="250" align="left" bgcolor="#FFFFFF">Confirm Highest Level of Education:</td>	  
	  <td>
	  <select class="element select medium" id="seducationlevel" name="seducationlevel" tabindex="60"> 
			<option value="0" selected="selected"></option>
          <option value="18">PhD</option>
          <option value="17">Master degree</option>
          <option value="16">Second Bachelor degree - 4 year +</option>
          <option value="15">Second Bachelor degree - 3 year</option>

          <option value="14">Second Bachelor degree - 2 year</option>
          <option value="13">First Bachelor degree - 4 year +</option>
          <option value="12">First Bachelor degree - 3 year</option>
          <option value="11">First Bachelor degree - 2 year</option>
          <option value="10">Diploma - 4 year</option>
          <option value="9">Diploma - 3 year</option>

          <option value="8">Diploma - 2 year</option>
          <option value="7">Diploma - 1 year</option>
          <option value="6">Certificate - 3 year</option>
          <option value="5">Certificate - 2 year</option>
          <option value="4">Certificate - 1 year</option>
          <option value="3">Apprenticeship</option>

          <option value="2">Secondary School</option>
          <option value="1">Primary School</option>

		</select>
	  </td>
	  
	  </tr>
	  
	  <tr>
	   <td width="93" bgcolor="#FFFFFF">College Information:</td>	  
	  <td>
	  <input name="scollegeinformation" id="scollegeinformation" type="text"  tabindex="61"/> 
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
      <td width="54" height="24" bgcolor="#EFEFEF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfm1" id="sfm1" tabindex="62">
            <option value="0" selected></option>
            <option value="01">01</option>
            <option value="02">02</option>

            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>

            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          </font></div>
      </td>

      <td width="64" bgcolor="#EFEFEF" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfy1" tabindex="63">
            <option value="0" selected></option>
			<option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>

			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>

			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>

            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>

            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="52" height="24" bgcolor="#EFEFEF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">

          <select name="stm1" tabindex="64">
            <option value="0" selected></option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>

            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>

            <option value="12">12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#EFEFEF" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sty1" tabindex="65">
            <option value="0" selected></option>

            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>

			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>

			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>

            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" nowrap bgcolor="#EFEFEF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="sjob1" tabindex="66" id="sjob1" size="40" maxlength="150">
          </font></div>

      </td>
    </tr>
    <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;2nd
        last</b></font></td>
      <td width="54" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfm2" tabindex="67">
            <option value="0" selected></option>

            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>

            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>

          </select>
          </font></div>
      </td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfy2" tabindex="68">
            <option value="0" selected></option>
            <option value="2020">2020</option>

			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>

			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>

			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>

            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>

      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="stm2" tabindex="69">
            <option value="0" selected></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>

            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>

            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#efefef" height="24">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sty2" tabindex="70">
            <option value="0" selected></option>
            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>

			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>

			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>

            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>

            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="sjob2"  tabindex="71" value="" size="40" maxlength="100">
          </font> </div>
      </td>
    </tr>
	
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;3rd
        last</b></font></td>
      <td width="54" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfm3" tabindex="72">
            <option value="0" selected></option>

            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>

            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>

          </select>
          </font></div>
      </td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfy3" tabindex="73">
            <option value="0" selected></option>
            <option value="2020">2020</option>

			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>

			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>

			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>

            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>

      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="stm3" tabindex="74">
            <option value="0" selected></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>

            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>

            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#efefef" height="24">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sty3" tabindex="75">
            <option value="0" selected></option>
            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>

			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>

			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>

            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>

            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="sjob3" tabindex="76" value="" size="40" maxlength="100">
          </font> </div>
      </td>
    </tr>
		
	 <tr>
      <td width="93" bgcolor="#FFFFFF"><font face="verdana,Arial, Helvetica, sans-serif" size="2"><b>&nbsp;&nbsp;Other</b></font></td>
      <td width="54" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfmother" tabindex="77">
            <option value="0" selected></option>

            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>

            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>

          </select>
          </font></div>
      </td>
      <td width="64" bgcolor="#efefef" height="24">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="sfyother" tabindex="78">
            <option value="0" selected></option>
            <option value="2020">2020</option>

			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>

			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>

			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>

            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>


          </select>
          </font></div>

      </td>
      <td width="52" height="24" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="stmother" tabindex="79">
            <option value="0" selected></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>

            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>

            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          </font></div>
      </td>
      <td width="56" bgcolor="#efefef" height="24">

        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <select name="styother" tabindex="80">
            <option value="0" selected></option>
            <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>

			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>

			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
            <option value="2005">2005</option>

            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>

            <option value="1998">1998</option>


          </select>
          </font></div>
      </td>
      <td width="259" height="24" align="center" valign="middle" bgcolor="#FFFFFF">
        <div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
          <input type="text" name="sjobother" tabindex="81" value="" size="40" maxlength="100">
          </font> </div>
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

          <select name="sengs" size="1" id="sengs" tabindex="82">
            <option value="0" selected>Select</option>
            <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>

          </select>
          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="sengw" id="sengw" tabindex="83">
            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="sengr" id="sengr" tabindex="84">
            <option value="" selected>Select</option>
            <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="sengu" id="sengu" tabindex="85">
            <option value="" selected>Select</option>
			 <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>

    </tr>
    <tr align="center">
      <td width="218" bgcolor="#FFFFFF">
        <div align="center"><font size="-1" face="verdana,Arial, Helvetica, sans-serif"><b>French</b></font></div>
      </td>
      <td width="85" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="sfres" id="sfres" tabindex="86">

            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>

          </font></div>
      </td>
      <td width="80" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="sfrew" id="sfrew" tabindex="87">
            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="90" bgcolor="#FFFFFF">

        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="sfrer" id="sfrer" tabindex="88">
            <option value="" selected>Select</option>
             <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
          </font></div>
      </td>
      <td width="108" bgcolor="#FFFFFF">
        <div align="center"> <font face="verdana,Arial, Helvetica, sans-serif">
          <select name="sfreu" id="sfreu" tabindex="89">
            <option value="" selected>Select</option>
 <option value="Fluently">Fluently</option>
            <option value="Well">Well</option>
            <option value="Basic">Basic</option>
            <option value="Not at All">Not at All</option>
          </select>
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
     
    </tr>
</table>		


<table width="600" border="0" cellspacing="1" cellpadding="1" align="center" bgcolor="#535353">	
			
			
			
			
			
              <tr bgcolor="#FFFFFF">
                <td><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Do
                  you have a job offer from a prospective Canadian employer ?</font></div></td>
                <td align="center" valign="middle"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
                    <select name="cjob" tabindex="90">
                      <option value="No">No</option>
                      <option value="Yes">Yes</option>
                    </select>
                </font></div></td>
                <td></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td width="477"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Do
                  you have HRDC confirmed offer of employment in Canada ? </font></div></td>
                <td align="center" valign="middle"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
                    <select name="coffer" tabindex="91">
                      <option value="No">No</option>
                      <option value="Yes">Yes</option>
                    </select>
                </font></div></td>
                <td></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td width="477"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Have
                  you worked in Canada for 1 year or more in full-time authorised<br />
                  &nbsp; employment ?</font></div></td>
                <td width="111" align="center" valign="middle"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
                    <select name="cwork" tabindex="92">
                      <option value="No">No</option>
                      <option value="Yes">Yes</option>
                    </select>
                </font></div></td>
                <td></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td width="477"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Have
                  you studied in Canada for 2 years or more full-time authorised<br />
                  &nbsp;&nbsp;post-secondary study ?</font></div></td>
                <td width="111" align="center" valign="middle"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
                    <select name="cstudy" tabindex="93"> 
                      <option value="No">No</option>
                      <option value="Yes">Yes</option>
                    </select>
                </font></div></td>
                <td></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td width="477"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">&nbsp;&nbsp;Do
                  you have a relative who is a Canadian Citizen or Permanent Resident
                  ?<br />
                  &nbsp;&nbsp;Only <u>living</u> relatives who are residing in Canada and who are direct blood<br />
                  &nbsp;&nbsp;relatives to you or your Spouse/Partner,<b><font color="#7b1316"> NOT</font></b> cousins and/or family friends.</font></div></td>
                <td width="111" align="left" valign="middle"><div align="left"><font face="verdana,Arial, Helvetica, sans-serif" size="2">
                    <select name="crel" tabindex="94">
                      <option value="No Family in Canada" selected>No Family in Canada</option>
                      <option value="Parent">Parent</option>
                      <option value="Brother/Sister">Brother/Sister</option>
                      <option value="Grandparent">Grandparent</option>
                      <option value="Child">Child</option>
                      <option value="Aunt/Uncle">Aunt/Uncle</option>
                      <option value="Niece/Nephew">Niece/Nephew</option>
                    </select>
                </font></div></td>
                <td></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td colspan="2" height="6"><font face="verdana,Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">&nbsp;&nbsp;If</font> </td>
                <td></td>
              </tr>
              <tr valign=TOP bgcolor="#FFFFFF">
                <td rowspan="2"><b><font size="2" face="verdana,Arial, Helvetica, sans-serif" >&nbsp;I
                  certify that the information provided by me, above, for my FREE Canadian
                  Immigration assessment is accurate and I consent to GE Immigration
                  corresponding with me at the e-mail address, above, regarding said assessment.
                  &nbsp;<br />
                </font></b> </td>
                <td width="91" align="left" valign="middle" bgcolor="#FFFFFF"><p align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2" ><b>Yes
                  <input type="radio" name="Declarationyes" id="Declarationyes" value="Yes" />
                  &nbsp; <br />
                </b></font></p></td>
                <td><input id="Declarationerror" name="Declarationerror" readonly="true"  maxlength="200" style="border: none"/></td>
                <p></p>
              </tr>
              <tr align=CENTER valign=TOP bgcolor="#FFFFFF" >
                <td width="91" align="left"  valign="middle" height="17"><div align="center"><font face="verdana,Arial, Helvetica, sans-serif" size="2" ><b>No&nbsp;</b>
                          <input type="radio" name="Declarationyes"  id="Declarationno" value="No" />
                  &nbsp; </font></div></td>
				  <td bgcolor="#FFFFFF"></td>
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
