<?php
require 'credential.php';
require 'class.eyemysqladap.inc.php';
require 'class.eyedatagrid.inc.php';

$delete =  $_GET["primaryKeyFieldName"]; 
// Load the database adapter
$db = new EyeMySQLAdap(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// Load the datagrid class
$x = new EyeDataGrid($db);

$db->delete("userdetails","UserId ='".$delete."'");

$fields = 'UserId'. ',FirstName'.',LastName'.',Gender'.',Email'.',DateofBirth'.',Country'.',PinCode'.',MobileNo'; 
// Set the query
$x->setQuery($fields, "userdetails", 'UserId');

// Allows filters
//$x->allowFilters();

// Change headers text
$x->setColumnHeader('FirstName', 'First Name');
$x->setColumnHeader('LastName', 'Last Name');

// Hide ID Column
$x->hideColumn('Id');

// Change column type
$x->setColumnType('FirstName', EyeDataGrid::TYPE_HREF, '#'); // Google Me!
$x->setColumnType('BirthDate', EyeDataGrid::TYPE_DATE, 'M d, Y', true); // Change the date format
$x->setColumnType('Gender', EyeDataGrid::TYPE_ARRAY, array('m' => 'Male', 'f' => 'Female')); // Convert db values to something better
$x->setColumnType('Done', EyeDataGrid::TYPE_PERCENT, false, array('Back' => '#c3daf9', 'Fore' => 'black'));

// Show reset grid control
$x->showReset();

// Add custom control, order does matter
//$x->addCustomControl(EyeDataGrid::CUSCTRL_TEXT, "alert('%FirstName%\'s been promoted!')", EyeDataGrid::TYPE_ONCLICK, 'Promote Me');

// Add standard control
$x->addStandardControl(EyeDataGrid::STDCTRL_EDIT, "window.location.replace('editadmindetails.php?&primaryKeyFieldName=%_P%')");
//$x->addStandardControl(EyeDataGrid::STDCTRL_DELETE, "alert('Deleting %_P%')");
$x->addStandardControl(EyeDataGrid::STDCTRL_DELETE, "window.location.replace('deleteadmin.php?&primaryKeyFieldName=%_P%')");

// Add create control
//$x->showCreateButton("alert('Code for creating a new person')", EyeDataGrid::TYPE_ONCLICK, 'Add New Person');

// Show checkboxes
//$x->showCheckboxes();

// Show row numbers
$x->showRowNumber();

// Apply a function to a row
// function returnSomething($lastname)
// {
	// return strrev($lastname);
// }
// $x->setColumnType('LastName', EyeDataGrid::TYPE_FUNCTION, 'returnSomething', '%LastName%');

if (EyeDataGrid::isAjaxUsed())
{
	$x->printTable();
	exit;
}
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
	  
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
         <li><a href="aboutus.php">About Us</a></li>
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
          <?php
			// Print the table
	EyeDataGrid::useAjaxTable();
	?>
          

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
