<?php
if ($_POST["amount"] <= 5){
	header('Location: http://www.drakewellcoffee.com/cart.php');
	die();
}else{

// By default, this sample code is designed to post to our test server for
// developer accounts: https://test.authorize.net/gateway/transact.dll
// for real accounts (even in test mode), please make sure that you are
// posting to: https://secure.authorize.net/gateway/transact.dll
$post_url = "https://test.authorize.net/gateway/transact.dll";

$post_values = array(
	
	// the API Login ID and Transaction Key must be replaced with valid values
	"x_login"			=> "8MpfZ4n4mR",
	"x_tran_key"		=> "28tdaLDA48D5g2Pg",

	"x_version"			=> "3.1",
	"x_delim_data"		=> "TRUE",
	"x_delim_char"		=> "|",
	"x_relay_response"	=> "FALSE",

	"x_type"			=> "AUTH_CAPTURE",
	"x_method"			=> "CC",
	"x_card_num"		=> $_POST["card"],
	"x_exp_date"		=> $_POST["exp"],

	"x_amount"			=> $_POST['amount'],
	"x_description"		=> "Coffee Transaction",
	
	"x_company "		=> $_POST['company'],
	"x_phone"			=> $_POST['phone'],
	"x_email"			=> $_POST['email'],

	"x_first_name"		=> $_POST['fName'],
	"x_last_name"		=> $_POST['lName'],
	"x_address"			=> $_POST['address'],
	"x_city"			=> $_POST['city'],
	"x_state"			=> $_POST['state'],
	"x_zip"				=> $_POST['zip'],
	"x_country"			=> $_POST['country'],
	
	"x_ship_to_first_name"		=> $_POST['shipFName'],
	"x_ship_to_last_name"		=> $_POST['shipLName'],
	"x_ship_to_address"			=> $_POST['shipAddress'],
	"x_ship_to_city"			=> $_POST['shipCity'],
	"x_ship_to_state"			=> $_POST['shipState'],
	"x_ship_to_zip"				=> $_POST['shipZip'],
	"x_ship_to_country"			=> $_POST['shipCountry']
	// Additional fields can be added here as outlined in the AIM integration
	// guide at: http://developer.authorize.net
);

// This section takes the input fields and converts them to the proper format
// for an http post.  For example: "x_login=username&x_tran_key=a1B2c3D4"
$post_string = "";
foreach( $post_values as $key => $value )
	{ $post_string .= "$key=" . urlencode( $value ) . "&"; }
$post_string = rtrim( $post_string, "& " );

// The following section provides an example of how to add line item details to
// the post string.  Because line items may consist of multiple values with the
// same key/name, they cannot be simply added into the above array.
//
// This section is commented out by default.

if (isset($_COOKIE["BB"]))
  {
	foreach ($_COOKIE["BB"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["BB$name"] = "Item<|>Breakfast Blend Cups<|><|>$value<|>9.99<|>Y";
			}else if($name == "G"){
				$rec["BB$name"] = "Item<|>Breakfast Blend Grounds<|><|>$value<|>8.99<|>Y";
			}else if($name == "W"){
				$rec["BB$name"] = "Item<|>Breakfast Blend Whole Bean<|><|>$value<|>8.99<|>Y";
			}
		}
    }
}

if (isset($_COOKIE["RW"]))
  {
	foreach ($_COOKIE["RW"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["RW$name"] = "Item<|>Restwell Cups<|><|>$value<|>15.99<|>Y";
			}else if($name == "G"){
				$rec["RW$name"] = "Item<|>Restwell Grounds<|><|>$value<|>13.99<|>Y";
			}else if($name == "W"){
				$rec["RW$name"] = "Item<|>Restwell Whole Bean<|><|>$value<|>13.99<|>Y";
			}
		}
    }
  }

if (isset($_COOKIE["SW"]))
  {
	foreach ($_COOKIE["SW"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["SW$name"] = "Item<|>Sleepwell Cups<|><|>$value<|>15.99<|>Y";
			}else if($name == "G"){
				$rec["SW$name"] = "Item<|>Sleepwell Grounds<|><|>$value<|>13.99<|>Y";
			}else if($name == "W"){
				$rec["SW$name"] = "Item<|>Sleepwell Whole Bean<|><|>$value<|>13.99<|>Y";
			}
		}
    }
}

if (isset($_COOKIE["CB"]))
  {
	foreach ($_COOKIE["CB"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["CB$name"] = "Item<|>Colombian Cups<|><|>$value<|>9.99<|>Y";
			}else if($name == "G"){
				$rec["CB$name"] = "Item<|>Colombian Grounds<|><|>$value<|>8.99<|>Y";
			}else if($name == "W"){
				$rec["CB$name"] = "Item<|>Colombian Whole Bean<|><|>$value<|>8.99<|>Y";
			}
		}
    }
}

if (isset($_COOKIE["ES"]))
  {
	foreach ($_COOKIE["ES"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["ES$name"] = "Item<|>Espresso Cup<|><|>$value<|>9.99<|>Y";
			}else if($name == "G"){
				$rec["ES$name"] = "Item<|>Espresso Grounds<|><|>$value<|>8.99<|>Y";
			}else if($name == "W"){
				$rec["ES$name"] = "Item<|>Espresso Whole Bean<|><|>$value<|>8.99<|>Y";
			}
		}
    }
}

if (isset($_COOKIE["CP"]))
  {
	foreach ($_COOKIE["CP"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["CP$name"] = "Item<|>Cappuccino Cup<|><|>$value<|>9.99<|>Y";
			}else if($name == "G"){
				$rec["CP$name"] = "Item<|>Cappuccino Grounds<|><|>$value<|>8.99<|>Y";
			}else if($name == "W"){
				$rec["CP$name"] = "Item<|>Cappuccino Whole Bean<|><|>$value<|>8.99<|>Y";
			}
		}
    }
}

if (isset($_COOKIE["HZ"]))
  {
	foreach ($_COOKIE["HZ"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["HZ$name"] = "Item<|>Hazelnut Cup<|><|>$value<|>9.99<|>Y";
			}else if($name == "G"){
				$rec["HZ$name"] = "Item<|>Hazelnut Grounds<|><|>$value<|>8.99<|>Y";
			}else if($name == "W"){
				$rec["HZ$name"] = "Item<|>Hazelnut Whole Bean<|><|>$value<|>8.99<|>Y";
			}
		}
    }
}

if (isset($_COOKIE["DF"]))
  {
	foreach ($_COOKIE["DF"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["DF$name"] = "Item<|>Decaffienated Cup<|><|>$value<|>9.99<|>Y";
			}else if($name == "G"){
				$rec["DF$name"] = "Item<|>Decaffienated Grounds<|><|>$value<|>8.99<|>Y";
			}else if($name == "W"){
				$rec["DF$name"] = "Item<|>Decaffienated Whole Bean<|><|>$value<|>8.99<|>Y";
			}
		}
    }
}

if (isset($_COOKIE["HC"]))
  {
	foreach ($_COOKIE["HC"] as $name => $value)
    {
    	if($value <= 0){
			
		}else{
			if($name == "C"){
				$rec["HC$name"] = "Item<|>Hot Chocolate Cup<|><|>$value<|>9.99<|>Y";
			}else if($name == "G"){
				$rec["HC$name"] = "Item<|>Hot Chocolate Grounds<|><|>$value<|>8.99<|>Y";
			}else if($name == "W"){
				$rec["HC$name"] = "Item<|>Hot Chocolate Whole Bean<|><|>$value<|>8.99<|>Y";
			}
		}
    }
}  

$line_items = $rec;

foreach( $line_items as $value )
	{ $post_string .= "&x_line_item=" . urlencode( $value ); }


// This sample code uses the CURL library for php to establish a connection,
// submit the post, and record the response.
// If you receive an error, you may want to ensure that you have the curl
// library enabled in your php configuration
$request = curl_init($post_url); // initiate curl object
	curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
	curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
	curl_setopt($request, CURLOPT_POSTFIELDS, $post_string); // use HTTP POST to send form data
	curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment this line if you get no gateway response.
	$post_response = curl_exec($request); // execute curl post and store results in $post_response
	// additional options may be required depending upon your server configuration
	// you can find documentation on curl options at http://www.php.net/curl_setopt
curl_close ($request); // close curl object

// This line takes the response and breaks it into an array using the specified delimiting character
$response_array = explode($post_values["x_delim_char"],$post_response);

// The results are output to the screen in the form of an html numbered list.


/*/echo $response_array[3];
echo "<OL>\n";
foreach ($response_array as $name => $value)
{
	echo "<LI>" . $name . ": " . $value . "&nbsp;</LI>\n";
}
echo "</OL>\n";*/


// individual elements of the array could be accessed to read certain response
// fields.  For example, response_array[0] would return the Response Code,
// response_array[2] would return the Response Reason Code.
// for a list of response fields, please review the AIM Implementation Guide
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
#center{
	width:940px; 
	margin:20px auto; 
	height:300px; 
	text-align:center; 
	font-size:20px;
}
#center a{
	transition:.5s;
	-webkit-transition:.5s;
	display:block; 
	clear:both; 
	width:50px; 
	height:100px; 
	margin:10px auto; 
	background-color: rgba(0,0,0,.3); 
	font-size:70px; 
	border-radius:50%;
	padding: 0px 30px 0px 20px;
}
#center a:hover{
	background-color: rgba(0,0,0,.8);
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
    
    
    <div id="center">
    	
    	<?php 
			echo $response_array[3] ;
		?>
        <a href="coffee.php">&#10094;</a>
    	
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