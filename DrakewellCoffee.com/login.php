<?php

 // Connects to your Database 

 mysql_connect("drakewellcoffee.db.12000725.hostedresource.com", "drakewellcoffee", "Drinkw3ll@#dwg") or die(mysql_error()); 

 mysql_select_db("drakewellcoffee") or die(mysql_error()); 



 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {

 		die('You did not fill in a required field.');

 	}

 	// checks it against the database



 	if (!get_magic_quotes_gpc()) {

 		$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

 		die('Incorrect password or Username.');

 				}

 while($info = mysql_fetch_array( $check )) 	

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = hash('sha256', $_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {

 		die('Incorrect password or Username.');

 	}

     else 

 { 

 
 // if login is ok then we add a cookie 

 	 $_POST['username'] = stripslashes($_POST['username']); 

 	 $hour = time() + 24*3600; 

 setcookie(ID_my_site, $_POST['username'], $hour, "/", ".drakewellcoffee.com"); 

 setcookie(Key_my_site, $_POST['pass'], $hour, "/", ".drakewellcoffee.com");	 

 header('Location: http://www.drakewellcoffee.com/coffee.php');

 //then redirect them to the members area 

 } 

 } 

 } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Master.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Drakewell Coffee</title>
<!-- InstanceEndEditable -->

<link href="CSS/Master_CSS.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<!-- InstanceBeginEditable name="head" -->


<style>
form{
	display:block;
	margin:10px auto;
	width:300px;
	text-align:center;
	height:270px;
	padding:30px 0px 0px 0px;
}
input{
	clear:both;
	background-color: rgba(255,255,255,0.2);
    border: none;
	border-bottom: solid 2px #520;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	padding:5px;
	width:290px; 
	margin:0px auto 10px auto;
}
form [type=submit]{
	transition:.5s;
	-webkit-transition:.5s;
	clear:both;
	background-color: rgba(255,255,255,0.2);
    border: none;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	padding:5px;
	width:290px; 
	margin:0px auto 10px auto;
}
form [type=submit]:hover{
	background-color: rgba(255,255,255,0.7);
}
</style>


<!-- InstanceEndEditable -->

</head>


<body>

<div id="header">

<div class="cut"></div>

	<div class="container">
	
    <!-- Header --->
    
    	<section id="logCart" class="f2"><a href="#">Log In</a>  <a href="cart.html">Your Cart</a></section>
	
		<div class="mainMenu f3">
        	
        	<a id="store" href="coffee.html">Coffee</a>
            <a id="fundrasier" href="fund.html">Fundraiser</a>
            <a id="logo" href="index.html"><span id="cup"></span></a>
            <a id="contact" href="contact.html">Contact</a>
        	<a id="about" href="about.html">About</a>
            
        </div>
        
        
    
	
    </div><!--- End 1st Container --->
    
</div><!-- End Of Header -->
    
    
	<div class="container">
	<!-- InstanceBeginEditable name="Content" -->


 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 


 <input type="text" name="username" maxlength="40" placeholder="Username" required="required"> 

 <input type="password" name="pass" maxlength="50" placeholder="Password" required="required"> 

 <input type="submit" name="submit" value="Login"> 

 </form> 
    
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