<?php
//Boxes
 $box = $_POST["BBC"] + $_POST["CBC"] + $_POST["ESC"] + $_POST["CPC"] + $_POST["DFC"] + $_POST["HCC"] + $_POST["HZC"];
 
 
//Bags
 $bag = $_POST["BBG"] + $_POST["CBG"] + $_POST["ESG"] + $_POST["CPG"] + $_POST["DFG"] + $_POST["HCG"] + $_POST["HZG"] + $_POST["BBW"] + $_POST["CBW"] + $_POST["ESW"] + $_POST["CPW"] + $_POST["DFW"] + $_POST["HCW"] + $_POST["HZW"];

 
 //Valarien Root Boxes
 $Vbox = $_POST["RWC"] + $_POST["SWC"];
 

//Valarien Root Bags
 $Vbag = $_POST["RWG"] + $_POST["SWG"] + $_POST["RWW"] + $_POST["SWW"];
 
 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 
		 if ($check){
		$box = $box * 10;
		$bag = $bag * 10;
		$Vbox = $Vbox * 10;
		$Vbag = $Vbag * 10;
		
		$boxP = $box * 9.99;
		$bagP = $bag * 8.99;
		$VboxP = $Vbox * 15.99;
		$VbagP = $Vbag * 12.99;
		}else{
	 	$boxP = $box * 9.99;
		$bagP = $bag * 8.99;
	 	$VboxP = $Vbox * 15.99;
	 	$VbagP = $Vbag * 12.99;
 }
 }else{
	$boxP = $box * 9.99;
	$bagP = $bag * 8.99;
	$VboxP = $Vbox * 15.99;
	$VbagP = $Vbag * 12.99; 
 }

 $total = $boxP + $bagP + $VboxP + $VbagP;
 $items = $box + $bag + $Vbox + $Vbag;
 
 if($items > 9){
	 $ship = 5.00;
	 $total = $total * 0.9;
 }else if($items < 5){
	 $ship = 5.00;
	 $total = $total + 5;
 }else{
	 $ship = 0.00;
 }

if ($total <= 5){
	header("Location: http://www.drakewellcoffee.com/cart.php");
}else if (isset($_POST["BBC"])) {
	setcookie("BB[C]", $_POST["BBC"], 0, "/", ".drakewellcoffee.com");
	setcookie("BB[G]", $_POST["BBG"], 0, "/", ".drakewellcoffee.com");
	setcookie("BB[W]", $_POST["BBW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("RW[C]", $_POST["RWC"], 0, "/", ".drakewellcoffee.com");
	setcookie("RW[G]", $_POST["RWG"], 0, "/", ".drakewellcoffee.com");
	setcookie("RW[W]", $_POST["RWW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("SW[C]", $_POST["SWC"], 0, "/", ".drakewellcoffee.com");
	setcookie("SW[G]", $_POST["SWG"], 0, "/", ".drakewellcoffee.com");
	setcookie("SW[W]", $_POST["SWW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("CB[C]", $_POST["CBC"], 0, "/", ".drakewellcoffee.com");
	setcookie("CB[G]", $_POST["CBG"], 0, "/", ".drakewellcoffee.com");
	setcookie("CB[W]", $_POST["CBW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("ES[C]", $_POST["ESC"], 0, "/", ".drakewellcoffee.com");
	setcookie("ES[G]", $_POST["ESG"], 0, "/", ".drakewellcoffee.com");
	setcookie("ES[W]", $_POST["ESW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("CP[C]", $_POST["CPC"], 0, "/", ".drakewellcoffee.com");
	setcookie("CP[G]", $_POST["CPG"], 0, "/", ".drakewellcoffee.com");
	setcookie("CP[W]", $_POST["CPW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("HZ[C]", $_POST["HZC"], 0, "/", ".drakewellcoffee.com");
	setcookie("HZ[G]", $_POST["HZG"], 0, "/", ".drakewellcoffee.com");
	setcookie("HZ[W]", $_POST["HZW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("DF[C]", $_POST["DFC"], 0, "/", ".drakewellcoffee.com");
	setcookie("DF[G]", $_POST["DFG"], 0, "/", ".drakewellcoffee.com");
	setcookie("DF[W]", $_POST["DFW"], 0, "/", ".drakewellcoffee.com");
	
	setcookie("HC[C]", $_POST["HCC"], 0, "/", ".drakewellcoffee.com");
	setcookie("HC[G]", $_POST["HCG"], 0, "/", ".drakewellcoffee.com");
	setcookie("HC[W]", $_POST["HCW"], 0, "/", ".drakewellcoffee.com");
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
input{
	display:block;
	background-color: rgba(255,255,255,0.2);
    border: none;
	border-bottom: solid 2px #520;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	padding:5px;
	width:300px; 
	margin:0px auto 10px auto;
	margin:5px;
}
form button{
	transition:.5s;
	-webkit-transition:.5s;
	color:#000;
	font-weight:bold;
	font-size:20px;
	padding:5px;
	margin:30px auto 30px auto;
	text-transform:uppercase;
	display:block;
	background-color: rgba(255,255,255,0.8)
}
form button:hover{
	background-color: rgba(255,255,255,0.2)
}
fieldset{
	margin:10px 0px;
	border:double 5px white;
	font-size:18px;
}
legend{
	color:white;
}


fieldset input:first-child{
	float:left;
	margin-right:0px;
	width:400px;
}
fieldset input:nth-child(2){
	float:left;
	margin-right:0px;
	width:400px;
}
fieldset input:nth-child(3){
	float:left;
	width:400px;
}
fieldset input:nth-child(4){
	float:left;
	width:200px;
}
fieldset input:nth-child(5){
	float:left;
	width:200px;
}
fieldset input:nth-child(6){
	float:left;
	width:100px;
}
fieldset input:nth-child(7){
	float:left;
	width:100px;
}
table{
	background-color: #FFF;
	font-size: 25px;
	font-family: Arial,Helvetica,sans-serif;
	color:black;
}
td{
	background-color: #FFF;
	font-size: 25px;
	font-family: Arial,Helvetica,sans-serif;
	color:black;
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
    
    <style>
    
	tr td:nth-child(2), tr td:nth-child(3), tr td:nth-child(4){
		text-align:center;
	}
	
    </style>
    <table width="940" border="1" class="logedHide">
  <tr style="text-align:center;">
    <td>Flavor</td>
    <td>Cups</td>
    <td>Grounds</td>
    <td>Whole Bean</td>
  </tr>
  <tr>
    <td>Breakfast Blend</td>
    <td><?php print $_POST['BBC']?></td>
    <td><?php print $_POST['BBG']?></td>
    <td><?php print $_POST['BBW']?></td>
  </tr>
  <tr>
    <td >Restwell</td>
    <td><?php print $_POST['RWC']?></td>
    <td><?php print $_POST['RWG']?></td>
    <td><?php print $_POST['RWW']?></td>
  </tr>
  <tr>
    <td>Sleepwell</td>
    <td><?php print $_POST['SWC']?></td>
    <td><?php print $_POST['SWG']?></td>
    <td><?php print $_POST['SWW']?></td>
  </tr>
  <tr>
    <td>Colombian</td>
    <td><?php print $_POST['CBC']?></td>
    <td><?php print $_POST['CBG']?></td>
    <td><?php print $_POST['CBW']?></td>
  </tr>
  <tr>
    <td>Espresso</td>
    <td><?php print $_POST['ESC']?></td>
    <td><?php print $_POST['ESG']?></td>
    <td><?php print $_POST['ESW']?></td>
  </tr>
  <tr>
    <td>Cappuccino</td>
    <td><?php print $_POST['CPC']?></td>
    <td><?php print $_POST['CPG']?></td>
    <td><?php print $_POST['CPW']?></td>
  </tr>
  <tr>
    <td>Hazelnut</td>
    <td><?php print $_POST['HZC']?></td>
    <td><?php print $_POST['HZG']?></td>
    <td><?php print $_POST['HZW']?></td>
  </tr>
  <tr>
    <td>Decaffeinated</td>
    <td><?php print $_POST['DFC']?></td>
    <td><?php print $_POST['DFG']?></td>
    <td><?php print $_POST['DFW']?></td>
  </tr>
  <tr>
    <td>Hot Chocolate</td>
    <td><?php print $_POST['HCC']?></td>
    <td><?php print $_POST['HCG']?></td>
    <td><?php print $_POST['HCW']?></td>
  </tr>
  </table>
  
  
  <table width="940" border="1" class="logedShow">
  <tr style="text-align:center;">
    <td>Flavor</td>
    <td>Cups</td>
    <td>Grounds</td>
    <td>Whole Bean</td>
  </tr>
  <tr>
    <td>Breakfast Blend</td>
    <td><?php print $_POST['BBC'] * 10 ?></td>
    <td><?php print $_POST['BBG'] * 10 ?></td>
    <td><?php print $_POST['BBW'] * 10 ?></td>
  </tr>
  <tr>
    <td >Restwell</td>
    <td><?php print $_POST['RWC'] * 10 ?></td>
    <td><?php print $_POST['RWG'] * 10 ?></td>
    <td><?php print $_POST['RWW'] * 10 ?></td>
  </tr>
  <tr>
    <td>Sleepwell</td>
    <td><?php print $_POST['SWC'] * 10 ?></td>
    <td><?php print $_POST['SWG'] * 10 ?></td>
    <td><?php print $_POST['SWW'] * 10 ?></td>
  </tr>
  <tr>
    <td>Colombian</td>
    <td><?php print $_POST['CBC'] * 10 ?></td>
    <td><?php print $_POST['CBG'] * 10 ?></td>
    <td><?php print $_POST['CBW'] * 10 ?></td>
  </tr>
  <tr>
    <td>Espresso</td>
    <td><?php print $_POST['ESC'] * 10 ?></td>
    <td><?php print $_POST['ESG'] * 10 ?></td>
    <td><?php print $_POST['ESW'] * 10 ?></td>
  </tr>
  <tr>
    <td>Cappuccino</td>
    <td><?php print $_POST['CPC'] * 10 ?></td>
    <td><?php print $_POST['CPG'] * 10 ?></td>
    <td><?php print $_POST['CPW'] * 10 ?></td>
  </tr>
  <tr>
    <td>Hazelnut</td>
    <td><?php print $_POST['HZC'] * 10 ?></td>
    <td><?php print $_POST['HZG'] * 10 ?></td>
    <td><?php print $_POST['HZW'] * 10 ?></td>
  </tr>
  <tr>
    <td>Decaffeinated</td>
    <td><?php print $_POST['DFC'] * 10 ?></td>
    <td><?php print $_POST['DFG'] * 10 ?></td>
    <td><?php print $_POST['DFW'] * 10 ?></td>
  </tr>
  <tr>
    <td>Hot Chocolate</td>
    <td><?php print $_POST['HCC'] * 10 ?></td>
    <td><?php print $_POST['HCG'] * 10 ?></td>
    <td><?php print $_POST['HCW'] * 10 ?></td>
  </tr>
  </table>
  
  
  <table width="200" border="1"> 
  <tr align="center">
    <td>Total: $<?php echo $total?></td>
  </tr>
</table>

    
    
	<form method="post" action="authorize.php">
    
    <input type="hidden" readonly="readonly" name="amount" value="<?php echo $total?>"/>
    
    <input type="text"  name="card" placeholder="Card #" maxlength="16" required="required"/>
    <input type="text" name="exp" placeholder="Experation Date (MM/YY)" maxlength="7" required="required"/>
    
    <input type="tel" name="phone" placeholder="Phone #" required="required"/>
    <input type="email" name="email" placeholder="Email" required="required"/>
    <input type="text" name="company" placeholder="Company (Optional)"/>
    
    
    <fieldset>
    <legend>Billing Address</legend>
    <input type="text" name="fName" placeholder="First Name" required="required"/>
    <input type="text" name="lName" placeholder="Last Name" required="required"/>
    <input type="text" name="address"placeholder="Address" required="required"/>
    <input type="text" name="city"placeholder="City" required="required"/>
    <input type="text" name="state" placeholder="State" required="required"/>
    <input type="text" name="zip" placeholder="Zip" />
    <input type="text" name="country" placeholder="Country"/>
    </fieldset>
    
    
    <fieldset>
    <legend>Shipping Address</legend>
    <input type="text" name="shipFName" placeholder="First Name" />
    <input type="text" name="shipLName" placeholder="Last Name" />
    <input type="text" name="shipAddress"placeholder="Address" />
    <input type="text" name="shipCity"placeholder="City" />
    <input type="text" name="shipState" placeholder="State" maxlength="2"/>
    <input type="text" name="shipZip" placeholder="Zip"/>
    <input type="text" name="shipCountry" placeholder="Country"/>
    </fieldset>
    
    
    <button type="submit">Place Order</button>
    
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