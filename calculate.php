<?php
if (isset($_COOKIE["BB"]))
  {
	foreach ($_COOKIE["BB"] as $name => $value)
    {
	$BB[$name] = $value;
    }
  }

 if (isset($_COOKIE["RW"]))
  {
	foreach ($_COOKIE["RW"] as $name => $value)
    {
	$RW[$name] = $value;
    }
  }

if (isset($_COOKIE["SW"]))
  {
	foreach ($_COOKIE["SW"] as $name => $value)
    {
	$SW[$name] = $value;
    }
  }

if (isset($_COOKIE["CB"]))
  {
	foreach ($_COOKIE["CB"] as $name => $value)
    {
	$CB[$name] = $value;
    }
  }

if (isset($_COOKIE["ES"]))
  {
	foreach ($_COOKIE["ES"] as $name => $value)
    {
	$ES[$name] = $value;
    }
  }

if (isset($_COOKIE["CP"]))
  {
	foreach ($_COOKIE["CP"] as $name => $value)
    {
	$CP[$name] = $value;
    }
  }

if (isset($_COOKIE["HZ"]))
  {
	foreach ($_COOKIE["HZ"] as $name => $value)
    {
	$HZ[$name] = $value;
    }
  }

if (isset($_COOKIE["DF"]))
  {
	foreach ($_COOKIE["DF"] as $name => $value)
    {
	$DF[$name] = $value;
    }
  }

if (isset($_COOKIE["HC"]))
  {
	foreach ($_COOKIE["HC"] as $name => $value)
    {
	$HC[$name] = $value;
    }
  }
 
 
 
//Boxes
 $box = $BB[C] + $CB[C] + $ES[C] + $CP[C] + $DF[C] + $HC[C] + $HZ[C];
 
 
 
//Bags
 $bag = $BB[G] + $CB[G] + $ES[G] + $CP[G] + $DF[G] + $HC[G] + $HZ[G] + $BB[W] + $CB[W] + $ES[W] + $CP[W] + $DF[W] + $HC[W] + $HZ[W];
 
 
 
 //Valarien Root Boxes
 $Vbox = $RW[C] + $SW[C];
 
 
 
//Valarien Root Bags
 $Vbag = $RW[G] + $SW[G] + $RW[W] + $SW[W];
 
 
 
//Total

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
	 $ship = 0.00;
	 $total = $total * 0.9;
 }else if($items < 5){
	 $ship = 5.00;
	 $total = $total + 5;
 }else{
	 $ship = 0.00;
 }
 
 $total = round($total,2);
 
 ?>