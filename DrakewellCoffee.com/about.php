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
 
/* Company is no longer in business database cannot be accessed commented out to prevent errors

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

*/
        
?>

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
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum vel neque at faucibus. Nullam ornare gravida adipiscing. Morbi vulputate leo ut elit dignissim luctus. Aenean ac laoreet tellus, ac bibendum elit. Curabitur sed lacus arcu. Proin viverra eleifend tortor. Phasellus vel tellus sit amet ipsum rhoncus tincidunt ut nec ante. Aenean tempus tellus nec mauris blandit, nec vestibulum libero egestas. Nam est ante, iaculis a varius nec, elementum non lectus. Integer tempor vehicula hendrerit. Donec accumsan purus mollis, scelerisque nibh quis, imperdiet erat. Quisque eget dui a felis porttitor euismod. Donec non nibh nec orci convallis facilisis ut vitae massa. Fusce in nisi vitae felis viverra ornare et eget nisi. Cras pretium nulla sagittis, hendrerit risus id, convallis mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum vel neque at faucibus. Nullam ornare gravida adipiscing. Morbi vulputate leo ut elit dignissim luctus. Aenean ac laoreet tellus, ac bibendum elit. Curabitur sed lacus arcu. Proin viverra eleifend tortor. Phasellus vel tellus sit amet ipsum rhoncus tincidunt ut nec ante.</p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum vel neque at faucibus. Nullam ornare gravida adipiscing. Morbi vulputate leo ut elit dignissim luctus. Aenean ac laoreet tellus, ac bibendum elit. Curabitur sed lacus arcu. Proin viverra eleifend tortor. Phasellus vel tellus sit amet ipsum rhoncus tincidunt ut nec ante.</p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum vel neque at faucibus. Nullam ornare gravida adipiscing. Morbi vulputate leo ut elit dignissim luctus. Aenean ac laoreet tellus, ac bibendum elit. Curabitur sed lacus arcu. Proin viverra eleifend tortor. Phasellus vel tellus sit amet ipsum rhoncus tincidunt ut nec ante.</p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum vel neque at faucibus. Nullam ornare gravida adipiscing. Morbi vulputate leo ut elit dignissim luctus. Aenean ac laoreet tellus, ac bibendum elit. Curabitur sed lacus arcu. Proin viverra eleifend tortor. Phasellus vel tellus sit amet ipsum rhoncus tincidunt ut nec ante.</p>
	
    
    
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