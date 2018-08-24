<?php
if (isset($_POST["BBC"])) {
	$day = 24*3600;
	setcookie("BB[C]", $_POST["BBC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("BB[G]", $_POST["BBG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("BB[W]", $_POST["BBW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("RW[C]", $_POST["RWC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("RW[G]", $_POST["RWG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("RW[W]", $_POST["RWW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("SW[C]", $_POST["SWC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("SW[G]", $_POST["SWG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("SW[W]", $_POST["SWW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("CB[C]", $_POST["CBC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("CB[G]", $_POST["CBG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("CB[W]", $_POST["CBW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("ES[C]", $_POST["ESC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("ES[G]", $_POST["ESG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("ES[W]", $_POST["ESW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("CP[C]", $_POST["CPC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("CP[G]", $_POST["CPG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("CP[W]", $_POST["CPW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("HZ[C]", $_POST["HZC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("HZ[G]", $_POST["HZG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("HZ[W]", $_POST["HZW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("DF[C]", $_POST["DFC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("DF[G]", $_POST["DFG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("DF[W]", $_POST["DFW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	setcookie("HC[C]", $_POST["HCC"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("HC[G]", $_POST["HCG"], time()+ $day, "/", ".drakewellcoffee.com");
	setcookie("HC[W]", $_POST["HCW"], time()+ $day, "/", ".drakewellcoffee.com");
	
	header('Location: http://www.drakewellcoffee.com/cart.php');
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

<style>

#type{
	width:940px;
	height:50px;
	margin:10px 0px;
}
#type span{
	
}
form{
	background-color: rgba(0,0,0,.3);
	margin-bottom:300px;
}
span{
	display:block;
	height:30px;
	padding:10px;
	color:white;
	float:left;
	width:200px;
	text-align:center;
	font-size:25px;
	font-weight:bold;
}
input {
	height:50px;
	width:80px;
	padding:0px 5px;
	float:left;
	margin: 0px 52px 0px 47px;
	text-align: center;
	border: 16px solid;
	border-bottom: 0px !important;
	border-top: 0px !important;
	font-size:20px;
}
.product{
	transition:60s linear;
	-webkit-transition:60s linear;
	width:940px;
	height:50px;
	background-size:940px 50px;
	margin:10px 0px;
}
.product:hover{
	background-position:3000px
}

.product:first-child{background-image:url(Images/Cart_Images/breakfast_blend.jpg);}
.product:nth-child(2){background-image:url(Images/Cart_Images/restwell.jpg);}
.product:nth-child(3){background-image:url(Images/Cart_Images/sleepwell.jpg);}
.product:nth-child(4){background-image:url(Images/Cart_Images/colombia.jpg);}
.product:nth-child(5){background-image:url(Images/Cart_Images/cappuccino.jpg);}
.product:nth-child(6){background-image:url(Images/Cart_Images/esspreso.jpg);}
.product:nth-child(7){background-image:url(Images/Cart_Images/hazelnut.jpg);}
.product:nth-child(8){background-image:url(Images/Cart_Images/decaf.jpg);}
.product:nth-child(9){background-image:url(Images/Cart_Images/hot_chocolate.jpg);}


.product:first-child span{background-color:#48a646;}
.product:nth-child(2) span{background-color:#7dd1ed;}
.product:nth-child(3) span{background-color:#70408a;}
.product:nth-child(4) span{background-color:#ec1e28;}
.product:nth-child(5) span{background-color:#d4a965;}
.product:nth-child(6) span{background-color:#bfbdcb;}
.product:nth-child(7) span{background-color:#735123;}
.product:nth-child(8) span{background-color:#e27926;}
.product:nth-child(9) span{background-color:#a6766a;}

.product:first-child input {border-color:#48a646;}
.product:nth-child(2) input {border-color:#7dd1ed;}
.product:nth-child(3) input {border-color:#70408a;}
.product:nth-child(4) input {border-color:#ec1e28;}
.product:nth-child(5) input {border-color:#d4a965;}
.product:nth-child(6) input {border-color:#bfbdcb;}
.product:nth-child(7) input {border-color:#735123;}
.product:nth-child(8) input {border-color:#e27926;}
.product:nth-child(9) input {border-color:#a6766a;}

form button{
	transition:.5s;
	-webkit-transition:.5s;
	border:none;
	padding:5px;
	margin:10px auto 20px auto;
	text-transform:uppercase;
	display:block;
	font-weight:bold;
	font-size:25px;
	width:200px;
	height:200px;
	box-shadow:0px 0px 100px #520 inset;
	border-radius:50%;
	background-color:transparent;
	color:white;
}
form button:hover{
	box-shadow:0px 0px 0px #520 inset;
}

form #sub{
	position:absolute;
	left:370px;
}
form #sub span{
	transition:1.5s;
	-webkit-transition:1.5s;
	width: 100px;
	margin: 0px 45px;
	background-color: rgba(100,25,0,0.3);
	height: 70px;
	border-radius: 50%;
	padding: 30px 0px 0px 0px;
}
form #sub:hover span{
	background-color: rgba(100,25,0,0.7);
}
form #sub:before{
	transition:5s;
	-webkit-transition:5s;
	content:"";
	width:200px;
	height:200px;
	position:absolute;
	top: -10px;
	left: -10px;
	background-image:url(Images/Cart_Images/cart-button.png);
	background-size:210px 210px;
	border-radius:50%;
	z-index:-1;
	border: white solid 10px;
	background-position: -5px -5px;
}
form #sub:hover:before{
	transform:rotate(360deg);
}
#sales{
	width:940px;
	margin:0px auto;
	position:relative;
}
.sale{
	width:200px;
	height:100px;
	border:white double 5px;
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
    
    <div id="type">
    	<span>Flavor</span>
        <span>Cups</span>
        <span>Grounds</span>
        <span>Whole Bean</span>
    </div>
    
    <form method="post" action="check.php">
    
<div class="product">

	<span class="f1">Breakfast Blend</span>
    
    
    <?php
if (isset($_COOKIE["BB"]))
  {
	foreach ($_COOKIE["BB"] as $name => $value)
    {
    echo "<input name='BB$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='BBC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='BBG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='BBW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>
  
  
<div class="product">
    
    <span class="f1">Restwell</span>
    
        <?php
if (isset($_COOKIE["RW"]))
  {
	foreach ($_COOKIE["RW"] as $name => $value)
    {
    echo "<input name='RW$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='RWC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='RWG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='RWW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>
    
    
<div class="product">

	<span class="f1">Sleepwell</span>
    
        <?php
if (isset($_COOKIE["SW"]))
  {
	foreach ($_COOKIE["SW"] as $name => $value)
    {
    echo "<input name='SW$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='SWC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='SWG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='SWW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>
    
    
    <div class="product">
    
    <span class="f1">Colombian Roast</span>
    
        <?php
if (isset($_COOKIE["CB"]))
  {
	foreach ($_COOKIE["CB"] as $name => $value)
    {
    echo "<input name='CB$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='CBC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='CBG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='CBW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>
    
    <div class="product">
    
    <span class="f1">Espresso</span>
    
        <?php
if (isset($_COOKIE["ES"]))
  {
	foreach ($_COOKIE["ES"] as $name => $value)
    {
    echo "<input name='ES$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='ESC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='ESG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='ESW' value='0' type='number' min='0' required='required'/>";
  }
	?> 

</div>
    
    <div class="product">
    
    <span class="f1">Cappuccino</span>
    
        <?php
if (isset($_COOKIE["CP"]))
  {
	foreach ($_COOKIE["CP"] as $name => $value)
    {
    echo "<input name='CP$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='CPC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='CPG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='CPW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>
    
    <div class="product">
    
    <span class="f1">Hazelnut</span>
    
       <?php
if (isset($_COOKIE["HZ"]))
  {
	foreach ($_COOKIE["HZ"] as $name => $value)
    {
    echo "<input name='HZ$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='HZC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='HZG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='HZW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>
    
    <div class="product">
    
    <span class="f1">Decaffeinated</span>
    
        <?php
if (isset($_COOKIE["DF"]))
  {
	foreach ($_COOKIE["DF"] as $name => $value)
    {
    echo "<input name='DF$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='DFC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='DFG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='DFW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>
    
    <div class="product">
    
    <span class="f1">Hot Chocolate</span>
    
        <?php
if (isset($_COOKIE["HC"]))
  {
	foreach ($_COOKIE["HC"] as $name => $value)
    {
    echo "<input name='HC$name' value='$value' type='number' min='0' required='required'/>";
    }
  }else{
	echo "<input name='HCC' value='0' type='number' min='0' required='required'/>";
	echo "<input name='HCG' value='0' type='number' min='0' required='required'/>";
	echo "<input name='HCW' value='0' type='number' min='0' required='required'/>";
  }
	?>

</div>

<?php
require 'calculate.php';
?>

<div class="product">
	
    
    <span>Items: <?php echo $items; ?></span>
	<span>Shipping: $<?php echo $ship; ?></span>
    <span>*Total: $<?php echo $total; ?></span>
    
    <span> <button type="submit" formaction="cart.php" style="border-radius:0px; height:30px; width:inherit; margin:0px; font-size:16px; border:#520 3px ridge; padding-bottom:25px;">Recalculate</button></span>
    

</div>
    <input type="hidden" name="total" min="0" value="<?php echo $total; ?>"/>
    
    <p style="width:940px; text-align:center;">* Total includes shipping</p>
	
    <button type="submit" id="sub"><span>Check Out</span></button>
    
    </form>
    
    
    
    <div id="sales" style="display:none;">
    	<div class="sale"></div>
        <div class="sale"></div>
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