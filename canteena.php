<?php //catalog.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Canteen</title>
<meta charset="utf-8">
<link rel="stylesheet" href="CaseStudyPt2Style.css">

</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>

</style>
<body>
<div id="wrapper">

  <div class="nav">
 
  <nav>
    <ul>	
			<div style="float:left" ><h1>Online Canteens</h1></div>
			<a href="cart.php"><a href="shopping_cart.jpg"><img src="shopping_cart.jpg" width="70" height="30"></a></a>
            <a href="trackorder.php">Track Order</a>
			<a href="login.php">Login Page</a>
	</ul>
  </nav>	
  </div>
<div id="rightcolumn">
<div class="content">
<form action="cart.php" method="post">
<table border="0">
<table align="center">
<caption align="top"><b>Chicken Rice Stall</b></caption>
<tr>
<td align="center"><b><br></b></td>
<td align="center"><b>Picture</b></td>
<td align="center"><b>Food</b></td>
<td align="center"><b>Price</b></td>
<td align="center"><b>Quantity</b></td>
<td align="center"><b>Comments</b></td>
</tr>
<tr>

<td align="center">1</td>
<td align="center"><a href="rchickenrice.jpg"><img src="rchickenrice.jpg" width="90" height="45"></a></td>
<td align="center">
Roasted Chicken Rice
</td>
<td>
$3.50
</td>
<td><input type="number" name="rcr"
   min="0" max="50" step="1" value="1"></td>
<td><textarea name="rcrcomments" id="rcrcomments" rows="4" cols="40">Enter additional requests here. </textarea></td>
</tr>
<tr>
<td align="center">2</td>
<td align="center"><a href="schickenrice.jpg"><img src="schickenrice.jpg" width="90" height="45"></a></td>
<td align="center">
Steamed Chicken Rice</td>
<td>$3.50</td>
<td><input type="number" name="scr"
   min="0" max="50" step="1" value="0"></td>
<td><textarea name="scrcomments" id="scrcomments" rows="4" cols="40">Enter additional requests here. </textarea></td>
</tr>
<tr>
<td align="center">3</td>
<td align="center"><a href="veg.jpg"><img src="veg.jpg" width="90" height="45"></a></td>
<td align="center">Vegetables in Oyster Sauce</td>
<td>$2</td>
<td><input type="number" name="veg"
   min="0" max="50" step="1" value="0"></td>
<td><textarea name="vegcomments" id="vegcomments" rows="4" cols="40">Enter additional requests here. </textarea></td>
</tr>
<tr>
<td align="center">4</td>
<td align="center"><a href="egg.jpg"><img src="egg.jpg" width="90" height="45"></a></td>
<td align="center">Braised Egg</td>
<td>$0.50</td>
<td><input type="number" name="egg"
   min="0" max="50" step="1" value="0"></td>
<td><textarea name="eggcomments" id="eggcomments" rows="4" cols="40">Enter additional requests here. </textarea></td>
</tr>
</table>
</table>
<br>
<table border="0">
<table align="center">
<caption align="top"><b>Drinks Stall</b></caption>
<caption align="bottom"><input type="submit" value="Submit Order">
<tr>
<td align="center"><b><br></b></td>
<td align="center"><b>Picture</b></td>
<td align="center"><b>Food</b></td>
<td align="center"><b>Price</b></td>
<td align="center"><b>Quantity</b></td>
<td align="center"><b>Comments</b></td>
</tr>
<tr>

<td align="center">1</td>
<td align="center"><a href="icedtea.jpg"><img src="icedtea.jpg" width="45" height="90"></a></td>
<td align="center">Iced Tea</td>
<td>
$1.20
</td>
<td><input type="number" name="it"
   min="0" max="50" step="1" value="1"></td>
<td><textarea name="itcomments" id="itcomments" rows="4" cols="40">Enter additional requests here. </textarea></td>
</tr>
<tr>
<td align="center">2</td>
<td align="center"><a href="icedcoffee.jpg"><img src="icedcoffee.jpg" width="45" height="90"></a></td>
<td align="center">
Iced Coffee</td>
<td>$1.20</td>
<td><input type="number" name="ic"
   min="0" max="50" step="1" value="0"></td>
<td><textarea name="iccomments" id="iccomments" rows="4" cols="40">Enter additional requests here. </textarea></td>
</tr>
<tr>
<td align="center">3</td>
<td align="center"><a href="icedlt.jpg"><img src="icedlt.jpg" width="45" height="90"></a></td>
<td align="center">Iced Lemon Tea</td>
<td>$1.50</td>
<td><input type="number" name="ilt"
   min="0" max="50" step="1" value="0"></td>
<td><textarea name="iltcomments" id="iltcomments" rows="4" cols="40">Enter additional requests here. </textarea></td>
</tr>
<tr>
<td align="center">4</td>
<td align="center"><a href="candrink.jpg"><img src="candrink.jpg" width="90" height="45"></a></td>
<td align="center">Canned Drinks</td>
<td>$1.50</td>
<td><input type="number" name="cd"
   min="0" max="50" step="1" value="0"></td>
<td><textarea name="cdcomments" id="cdcomments" rows="4" cols="40">Indicate canned drink here </textarea></td>
</tr>
</table>
</table>
</form>
<br />
</div>
</div>

<footer>
	<small><i>Copyright &copy; 2018 Online Canteens
		</i><small><br>
	E-mail: <a href="mailto:baoxiu@chew.com">baoxiu@chew.com
</footer>

</div>
</body>
</html>