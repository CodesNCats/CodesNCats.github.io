<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Master.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Drakewell Coffee</title>


<style>
#contactF{
	display:block;
	width:740px;
	margin:0px auto;
}
#contactF input, #contactF textarea, #contactF select {
	display: block;
	width: 670px;
	margin: 25px;
	padding: 10px;
	background-color: rgba(255,255,255,0.2);
    border: none;
	border-bottom: solid 2px #520;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	color:black;
}
form #fname , form #lname  {
	float: left;
	margin: 25px;
	width: 295px;
	padding:10px;
	color:black;
}
form #lname {
	float:right;
}
form #email {
	clear: both;
}
form #message {
	max-width: 670px;
	min-width: 670px;
	min-height: 100px;
	max-height: 100px;
	resize:none;
	color:black;
}
form button{
	transition:.5s;
	-webkit-transition:.5s;
	width:55px;
	height:55px;
	border-radius:50%;
	border:none;
	margin:10px auto 20px auto;
	display:block;
	background-color: rgba(255,255,255,0.2);
	color:black;
}
.pillar{
	float:left;
	width:100px;
	height:370px;
	background-image:url(Images/Random/Pillar.png);
}

form fieldset{
	transition:0.5s;
	-webkit-transition:.5s;
	overflow:hidden;
	height:0px;
	margin-left:-10px;
}
form legend{
	color:white;
}

/*=== Hover ===*/
form button:hover{
	background-color: rgba(255,255,255,0.7)
}
/*form fieldset:hover{
	height:320px;
}*/


</style>
<!-- InstanceEndEditable -->

<link href="CSS/Master_CSS.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<!-- InstanceBeginEditable name="head" -->




<!-- InstanceEndEditable -->

</head>


<body>

<div id="header">

<div class="cut"></div>

	<div class="container">
	
    <!-- Header --->
    
    	<section id="logCart" class="f2"><a href="login.php">Log In</a>  <a href="cart.php">Your Cart</a></section>
	
		<div class="mainMenu f3">
        	
        	<a id="store" href="coffee.php">Coffee</a>
            <a id="fundrasier" href="fund.php">Fundraiser</a>
            <a id="logo" href="index.php"><span id="cup"></span></a>
            <a id="contact" href="contact.php">Contact</a>
        	<a id="about" href="about.php">About</a>
            
        </div>
        
        
    
	
    </div><!--- End 1st Container --->
    
</div><!-- End Of Header -->
    
    
	<div class="container">
	<!-- InstanceBeginEditable name="Content" -->
    
    <p style="font-size:20px; width:740px; margin:0px auto; text-align:center;">Once you fill out the fields below and click submit a Drakewell Coffee consultant will receive your message and respond promptly.</p>
  
    <div style="height:820px;">
    
    
    
    <?php
function spamcheck($field) {
// Sanitize e-mail address
$field=filter_var($field, FILTER_SANITIZE_EMAIL);
// Validate e-mail address
if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
} else {
    return FALSE;
}
}

if (isset($_POST["email"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["email"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
    } else {
	  $name = $_POST["fname"] . " " . $_POST["lname"];
      $from = $_POST["email"]; // sender
      $subject = $_POST["subject"];
      $message = "$name\n\n" . $_POST["message"] . "\n\n Prefered Method: " . $_POST["method"] . "\n\n Best time to contact: " . $_POST["time"] ."\n\n Phone: " . $_POST["phone"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("bschroeder@drakewellgroup.com",$subject,$message,"From: $from\n");
      echo "Thank you! your message has been sent.";
    }
}
?>
    
    <div class="pillar" style="display:none;"></div>
    
  <form id="contactF" method="post" action="contact.php" autocomplete="on">

<input type="text" name="fname" id="fname" placeholder="First Name*" required="required"/>
<input type="text" name="lname" id="lname" placeholder="Last Name*" required="required"/>

<input type="email" name="email" id="email" placeholder="Email*" required="required"/>

<input type="tel" name="phone" id="phone" placeholder="Phone*" required="required"/>
<input type="text" name="time" id="time" placeholder="Best Time to Contact"/>
<input type="text" name="method" id="method" placeholder="Prefered Method of Contact">

<style>
	option{color:black;}
</style>
    
<select style="width:690px; color:black;" name="subject" id="subject">
	
	<option value="">Please select a subject...</option>
	<option value="sales">Sales</option>
    <option value="products">Products</option>
    <option value="flavors">Flavor</option>
    <option value="wholesale">Wholesale</option>
    <option value="fundraiser">Fundraiser</option>
    <option value="nutrition">Nutrition</option>
    <option value="accounting">Accounting</option>
    <option value="managment">Management</option>
    <option value="operations">Operations</option>
    <option value="graphics">Custom Graphics</option>
    <option value="gift">Give A Gift</option>
    <option value="OEM">OEM</option>
</select>

<textarea name="message" id="message" placeholder="Message*" required="required"></textarea>

<button type="submit">Send</button>
</form>
	
    <div class="pillar" style="display:none;"></div>
    </div>
    
    <!-- InstanceEndEditable -->
    </div><!--- End 2nd Container --->
    
    
    
 <!--- Footer --->
    
    <div id="footer">
    
    <div class="cut"></div>
    
    	<div class="container">
    
    
    		<div id="contactUs" class="f2">
        	
          	  <h3 class="f1">Contact Us</h3>
          	  	<p>
            		6 Arrow Road Suite 202<br />
					Ramsey, NJ 07446<br />
					(201) 735-0541
          	  	</p>
          	 	<p id="general">
            		General: Drinkwell@DrakewellCoffee.com<br />
					Catering: Catering@DrakewellCoffee.com<br />
					Wholesale: Wholesale@DrakewellCoffee.com<br />
					Careers: Drinkwell@DrakewellCoffee.com
            	</p>
            
        	</div><!--- End Contact US --->
            
            
            <div id="social" class="f2">
            
            	 <h3 class="f1">Social</h3>
                 <a class="socialIcon" style="background-image:url(Images/Symbols/FaceBook_Gray-01.png)"></a>
                 <a class="socialIcon" style="background-image:url(Images/Symbols/LinkedIn_Gray-01.png)"></a>
                 <a class="socialIcon" style="background-image:url(Images/Symbols/Twitter_Gray-01.png)"></a>
                 <a class="socialIcon" style="background-image:url(Images/Symbols/G+_Gray-01.png)"></a>                 
                 
            </div><!--- End of Social --->
            
            
            
            <div id="support" class="f2">
            	<h3 class="f1">Support</h3>
                <p>
                	<a>Wholesale</a><br />
                	<a>Employment</a><br />
                	<a>Contact</a><br />
                    <a>FAQs</a><br />
                    <a>Legal</a>
                </p>
            </div><!--- End Support --->
        
        </div><!--- End 3rd container --->
    
    </div><!--- End Of Footer --->
    
    
</body>
<!-- InstanceEnd --></html>