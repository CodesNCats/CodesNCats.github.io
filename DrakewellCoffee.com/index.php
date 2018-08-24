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

<script>
function random(){
	var x = Math.floor((Math.random() * 5) + 1);
	switch (x){
	
	case 1:
    	document.write('<link rel="stylesheet" type="text/css" href="Images/Home_Page/bean.css">');
	break;
	case 2:
		document.write('<link rel="stylesheet" type="text/css" href="Images/Home_Page/flower.css">');
	break;
	case 3:
		document.write('<link rel="stylesheet" type="text/css" href="Images/Home_Page/coffee.css">');
	break;
	case 4:
		document.write('<link rel="stylesheet" type="text/css" href="Images/Home_Page/cup.css">');
	break;
	case 5:
		document.write('<link rel="stylesheet" type="text/css" href="Images/Home_Page/coffee.css">');
	break;
	
	}
}
window.onload = random()
</script>

<style>
html{
	height:100%;
	background-size:cover;
}
body{
	background-image:none;
	margin-right:17px;
}
body > .container{
	display:none;
}
#header{
	height:100%;
	background-image:none;
	box-shadow:none;
}
#header a{
	opacity:1;
	background-color: rgba(0,0,0,.40);
	font-weight:bold;
}
#header a:not(#logo){
	color:white;
	background-image:none;
}
#header:before{
	display:none;
}
#logCart{
	display:none;
}
.cut{
	display:none;
}
#footer{
	
	display:none;
}
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