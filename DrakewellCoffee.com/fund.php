<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Master.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Drakewell Coffee</title>
<!-- InstanceEndEditable -->

<link href="CSS/Master_CSS.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<?php

 // Connects to your Database 

mysql_connect("drakewellcoffee.db.12000725.hostedresource.com", "drakewellcoffee", "Drinkw3ll@#dwg") or die(mysql_error()); 

 mysql_select_db("drakewellcoffee") or die(mysql_error()); 

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 
        
if($check){
 print "<style>"; 

 print ".logedShow{display:;}";
 
 print ".logedHide{display:none;}"; 

 print "</style>"; 

 		   }  
}else{
	print "<style>"; 

	print ".logedShow{display:none;}";
    
    print "</style>";
}

        
?>

<!-- InstanceBeginEditable name="head" -->
<script>
function register(){
	var cname = "unlock";
	var cvalue = "yes";
	var exdays = 30;
	var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

</script>
<style>
#header ~ .container{
	width:940px;
}
.sml, .med, .lrg{
	position:absolute;
	display:block;
	border:solid 1px gray;
}
.sml{
	width:215px;
	height:278px;
	background-size:215px 278px;
}
.med{
	width:354px;
	height:215px;
	background-size:354px 215px;
}
.lrg{
	width:215px;
	height:354px;
	background-size:215px 354px;
}
input{
	background-color: rgba(255,255,255,0.2);
    border: none;
	border-bottom: solid 2px #520;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	padding:5px;
	width:300px; 
	margin:0px auto 10px auto;
}
form button{
	transition:.5s;
	-webkit-transition:.5s;
	padding:5px;
	margin:10px auto 20px auto;
	text-transform:uppercase;
	display:block;
	color:black;
}
form button:hover{
	background-color: rgba(255,255,255,0.4)
}
form a{
	transition:.5s;
	-webkit-transition:.5s;
	font-size:24px;
	font-weight:bold;
	clear:both;
	background-color: rgba(180,0,0,0.2);
	color:white;
	padding:5px;
}
form a:hover{
	background-color: rgba(180,0,0,1);
}
.holder{position:relative;width:940px;height:750px;margin:0px 0px 15px 0px;}
#flavors{width:940px; height:127px;"}
</style>
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
    
    <p style="width:900px; text-align:center; margin:10px auto; font-size:30px; font-weight:bold; color:white;">Welcome to the Drakewell Coffee Fundraising Program!</p>
    
    <img id="flavors" src="Images/flavor.png"/>
    
    <p style="width:900px; text-align:center; margin:10px auto; font-size:20px; font-weight:bold; color:white;">We've uploaded example letters, collages, forms, and charts to give viewers a taste of how our coffee fundraising packages are designed. What you see posted here isn't all we've got... </p>
    
<div class="holder">
    
    
<a target="_blank" class="sml"  style="left:10px; top:10px;background-image:url(Files/Fundraiser_Electronic_Part1.jpg);"></a>

<a target="_blank" class="sml"  style="left:245px; top:10px; background-image:url(Files/Fundraiser_Electronic_Part2.jpg);"></a>

<a target="_blank" class="sml"  style="left:480px; top:10px; background-image:url(Files/Fundraiser_Electronic_Part5.png);"></a>

<a target="_blank" class="sml"  style="left:715px; top:10px; background-image:url(Files/Fundraiser_Graph.jpg);"></a>

<a target="_blank" class="lrg"  style="left: 10px; top: 308px; background-image:url(Files/Fundraiser_Electronic_Part3.jpg);"></a>

<a target="_blank" class="med"  style="left: 245px; top: 308px; background-image:url(Files/Fundraiser_Electronic_Part4.png);"></a>

<form style="display:block; position:absolute; top:308px; right:10px; width:309px; height:215px; text-align:center;" method="post" action="fund.php">
    
    
    
<?php

mysql_connect("drakewellcoffee.db.12000725.hostedresource.com", "drakewellcoffee", "Drinkw3ll@#dwg") or die(mysql_error()); 

 mysql_select_db("drakewellcoffee") or die(mysql_error()); 


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


if (isset($_COOKIE["unlock"])){
	echo "<br /><br /><br /><br /><br /><br /><a href='Files/Fundraiser_Electronic_Package.pdf' target='new'>Download Fundraiser PDF</a>";
}else{
if (isset($_POST["email"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["email"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
    } else {
	  $name = $_POST["name"] . " from " . $_POST["company"] . " has downloaded our fundraiser package. They can be reached at". $_POST["phone"];
      $from = $_POST["email"]; // sender
      $subject = "Fundraiser Download";
      $message = $name;
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("bschroeder@drakewellgroup.com",$subject,$message,"From: $from\n");
      echo "Thank you.<br />Your fundraiser access will continue for 30 days.<br /><br /> <a href='Files/Fundraiser_Electronic_Package.pdf' target='new'>Download Fundraiser PDF</a>";
	  echo'<script type="text/javascript">'
   , 'register();'
   , '</script>'
   ;
   
   if (!get_magic_quotes_gpc()) {


 		$_POST['name'] = addslashes($_POST['name']);

 	}

 $usercheck = $_POST['name'];

 $check = mysql_query("SELECT name FROM fundraiser WHERE name = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {

 		die('');

 				}
   
    }
	
	 // now we insert it into the database

 	$insert = "INSERT INTO fundraiser (name, company, email, phone)

 			VALUES ('".$_POST['name']."', '".$_POST['company']."', '".$_POST["email"]."', '".$_POST["phone"]."')";

 	$add_member = mysql_query($insert);
	
//if nether presents form
	
}else{
		echo "<p style='width:300px; text-align:justify; margin:10px auto; font-size:20px; font-weight:bold; color:white;'>For our step by step Buck-A-Cup package equipt with a Drakewell Coffee Team, just type in the essentials and we'll take care of the rest!</p>
		<input type='email' name='email' id='email' placeholder='Email' required='required' />
	<input type='tel'  name='phone' id='phone' placeholder='Phone Number' required='required' />
    <input type='text'  name='name' id='name' placeholder='Name' required='required' />
    <input type='text'  name='company' id='company' placeholder='Organization' required='required' />
    <button type='submit'>Access Fundraiser Package</button>";
}
}
?>
    
</form>

<img src="Images/Random/Coffee.png" style="width: 660px; position: absolute; top: 543px; right: 10px; height: 117px; display:none;" />


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