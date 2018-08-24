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
.item{
	transition:.5s;
	-webkit-transition:.5s;
	width:293px;
	height:320px;
	margin:0px 20px 50px 0px;
	float:left;
}
.item:nth-child(3n+3){
	transition:.5s;
	-webkit-transition:.5s;
	margin:0px 0px 50px 0px;
}

.showCase{
	position:relative;
	z-index:10;
	transition:.5s;
	-webkit-transition:.5s;
	width:293px;
	height:293px;
	overflow:hidden;
	background-size:293px 293px;
	background-image:url(Test_files/data1/images/jpg024.jpg)
}

/*=== Text Color ===*/
.item:nth-of-type(1) .itemTitle{background-color:#48a646;}
.item:nth-of-type(2) .itemTitle{background-color:#7dd1ed;}
.item:nth-of-type(3) .itemTitle{background-color:#70408a;}
.item:nth-of-type(4) .itemTitle{background-color:#ec1e28;}
.item:nth-of-type(5) .itemTitle{background-color:#d4a965;}
.item:nth-of-type(6) .itemTitle{background-color:#bfbdcb;}
.item:nth-of-type(7) .itemTitle{background-color:#735123;}
.item:nth-of-type(8) .itemTitle{background-color:#e27926;}
.item:nth-of-type(9) .itemTitle{background-color:#a6766a;}

/*=== Lid Logo ===*/
.item:nth-of-type(1) .itemLogo{background-image:url(Images/Lids/breakfast.png);}
.item:nth-of-type(2) .itemLogo{background-image:url(Images/Lids/restwell.png);}
.item:nth-of-type(3) .itemLogo{background-image:url(Images/Lids/sleepwell.png);}
.item:nth-of-type(4) .itemLogo{background-image:url(Images/Lids/colombian.png);}
.item:nth-of-type(5) .itemLogo{background-image:url(Images/Lids/espresso.png);}
.item:nth-of-type(6) .itemLogo{background-image:url(Images/Lids/cappuccino.png);}
.item:nth-of-type(7) .itemLogo{background-image:url(Images/Lids/hazelnut.png);}
.item:nth-of-type(8) .itemLogo{background-image:url(Images/Lids/decaff.png);}
.item:nth-of-type(9) .itemLogo{background-image:url(Images/Lids/hot-chocolate.png);}

/*=== BG ===*/
.item:nth-of-type(1) .showCase{background-image:url(Images/Store_Images/Breakfast.jpg);}
.item:nth-of-type(2) .showCase{background-image:url(Images/Store_Images/Restwell.jpg);}
.item:nth-of-type(3) .showCase{background-image:url(Images/Store_Images/Sleepwell.jpg);}
.item:nth-of-type(4) .showCase{background-image:url(Images/Store_Images/Colombia.jpg);}
.item:nth-of-type(5) .showCase{background-image:url(Images/Store_Images/Esspreso.jpg);}
.item:nth-of-type(6) .showCase{background-image:url(Images/Store_Images/Cappuccino.jpg);}
.item:nth-of-type(7) .showCase{background-image:url(Images/Store_Images/Hazelnut.jpg);}
.item:nth-of-type(8) .showCase{background-image:url(Images/Store_Images/Decaf.jpg);}
.item:nth-of-type(9) .showCase{background-image:url(Images/Store_Images/Hot_Coca.jpg);}

.itemLogo{
	display:none;
	transition:.5s;
	-webkit-transition:.5s;
	width:120px;
	height:120px;
	opacity:0;
	margin:5px auto 0px;
	background-size:120px 120px;
	background-image:url(Test_files/Images/lo.png);
}
.itemTitle{
	transition:.5s;
	-webkit-transition:.5s;
	display:block;
	font-size:32px;
	width:293px;
	height:36px;
	margin:250px auto 0px;
	text-align:center;
	text-transform:;
	color:white;
	opacity:.8;
}
.itemDescirption{
	transition:.5s;
	-webkit-transition:.5s;
	width:273px;
	height:265px;
	padding:10px;
	margin:0px 0px 0px 0px;
	text-align:center;
	color:white;
	background-color: rgba(0, 0, 0, 0.66);
}
.itemName{
	position:relative;
	z-index:1;
	transition:.5s;
	-webkit-transition:.5s;
	display:block;
	margin:12px 0px 12px 0px;;
	height:20px;
	width:293px;
}
.itemName .Name{
	transition:.5s;
	-webkit-transition:.5s;
	display:block;
	float:left;
}
.itemName .price{
	transition:.5s;
	-webkit-transition:.5s;
	display:block;
	float:right;
}
.itemLine{
	position:relative;
	z-index:2;
	transition:.5s;
	-webkit-transition:.5s;
	height:0px;
	width:293px;
	border-bottom:2px solid black;
}


/*--- Roll Overs ---*/
.item:hover .itemLogo{
	opacity:1;
}
.item:hover .itemTitle{
	margin:0px auto 0px;
	opacity:1;
}

/*=== Click ===*/
.item:hover .itemName{
	margin:-40px 0px 12px 0px;
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
    
    <p style="font-size:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum vel neque at faucibus. Nullam ornare gravida adipiscing. Morbi vulputate leo ut elit dignissim luctus. Aenean ac laoreet tellus, ac bibendum elit. Curabitur sed lacus arcu. Proin viverra eleifend tortor. Phasellus vel tellus sit amet ipsum rhoncus tincidunt ut nec ante. Aenean tempus tellus nec mauris blandit, nec vestibulum libero egestas. Nam est ante, iaculis a varius nec, elementum non lectus. Integer tempor vehicula hendrerit. Donec accumsan purus mollis, scelerisque nibh quis, imperdiet erat. Quisque eget dui a felis porttitor euismod. Donec non nibh nec orci convallis facilisis ut vitae massa. Fusce in nisi vitae felis viverra ornare et eget nisi. Cras pretium nulla sagittis, hendrerit risus id, convallis mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
    
    
<div style="height:1150px;">
 
 
	<a class="item" href="Products/breakfast_blend.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Breakfast</span>
        	<div class="itemDescirption f2">Get the day started off right with this gentle, tasty, & energizing blend.</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Breakfast Blend</span>
        	<span class="price">$8.99 - $9.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/restwell.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Restwell</span>
        	<div class="itemDescirption f2">A light, naturally decaffeinated, gourmet valerian root coffee, soothing to the taste & mind.</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Restwell</span>
        	<span class="price">$12.99 - $15.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/sleepwell.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Sleepwell</span>
        	<div class="itemDescirption f2">A stronger blend of, naturally decaffeinated, valerian coffee helping to revitalize your body & mind at the end of any day.</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Sleepwell</span>
        	<span class="price">$12.99 - $15.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/gcr.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Colombian</span>
        	<div class="itemDescirption f2">Our Arabica roast captivates all the essence of Colombia in just one cup.</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Colombian Roast</span>
        	<span class="price">$8.99 - $9.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/seb.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Espresso</span>
        	<div class="itemDescirption f2">Classically bold in taste & without bitterness,only a trained, artisan roaster could be responsible for this blend!</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Signature Espresso</span>
        	<span class="price">$8.99 - $9.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/cappuccino.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Cappuccino</span>
        	<div class="itemDescirption f2">Rich & frothy goodness topping off a truly decadent, steamed milk & earthy espresso combination.</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Cappuccino</span>
        	<span class="price">$8.99 - $9.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/hazelnut.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Hazelnut</span>
        	<div class="itemDescirption f2">An absolutely breath taking aromatic taste with a richness & indulgence that delivers!</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Hazelnut</span>
        	<span class="price">$8.99 - $9.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/decaf.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Decaffeinated</span>
        	<div class="itemDescirption f2">A naturally decaffeinated gourmet coffee, without compromise in taste.</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Decaffeinated</span>
        	<span class="price">$8.99 - $9.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
    
    <a class="item" href="Products/hot_chocolate.php">
    	<div class="showCase">
        	<div class="itemLogo"></div>
        	<span class="itemTitle f1">Hot Chocolate</span>
        	<div class="itemDescirption f2">A sweet & savory mix that you’ll find yourself drinking all year long.</div>
        </div>
        
        <span class="itemName f2">
        	<span class="Name">Hot Chocolate</span>
        	<span class="price">$8.99 - $9.99</span>
        </span>
        
        <div class="itemLine"></div>
        
    </a>
    
</div><!--- End Spacer --->


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