<?php
// create short variable names
  $rcr = $_POST['rcr'];
  $rcrcomments = $_POST["rcrcomments"];
  $scr = $_POST['scr'];
  $scrcomments = $_POST["scrcomments"];
  $veg = $_POST['veg'];
  $vegcomments = $_POST["vegcomments"];
  $egg = $_POST['egg'];
  $eggcomments = $_POST["eggcomments"];
  $it = $_POST['it'];
  $itcomments = $_POST["itcomments"];
  $ic = $_POST['ic'];
  $iccomments = $_POST["iccomments"];
  $ilt = $_POST['ilt'];
  $iltcomments = $_POST["iltcomments"];
  $cd = $_POST['cd'];
  $cdcomments = $_POST["cdcomments"];
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
<?php
	date_default_timezone_set("Asia/Singapore");
	echo date_default_timezone_get();
	echo "<p>Order made at ".date('H:i, jS F Y')."</p>";

	echo "<p>Your order is as follows: </p>";

  
	$totalqty = 0;
	$totalqty = $rcr + $scr + $veg + $egg + $it + $ic + $ilt + $cd;
	$totalfoodqty = $rcr + $scr + $veg + $egg;
	$totaldrinkqty = $it + $ic + $ilt + $cd;
	echo "Items ordered: ".$totalqty."<br />";

if ($totalqty == 0) {

	  echo "You did not order anything on the previous page!<br />";

	} else {

	  if ($totalfoodqty !== 0 && $rcr > 0) {
		echo $rcr." roasted chicken rice<br />";
		echo "Comments:".$rcrcomments."<br />";
	  }
		 if ($totalfoodqty !== 0 && $scr > 0) {
		echo $scr." steamed chicken rice<br />";
		echo "Comments:".$scrcomments."<br />";
	  }
	  if ($totalfoodqty !== 0 && $veg > 0) {
		echo $veg." vegetables with oyster sauce<br />";
		echo "Comments:".$vegcomments."<br />";
	  }
		  if ($totalfoodqty !== 0 && $egg > 0) {
		echo $egg." braised egg<br />";
		echo "Comments:".$eggcomments."<br />";
	  }
	
	  if ($totaldrinkqty !== 0 && $it > 0) {
		echo $it." iced tea<br />";		
		echo "Comments:".$itcomments."<br />";
	  }

	  if ($totaldrinkqty !== 0 && $ic > 0) {
		echo $ic." iced coffee<br />";
		echo "Comments:".$iccomments."<br />";
	  }

	  if ($totaldrinkqty !== 0 && $ilt > 0) {
		echo $ilt." iced lemon tea<br />";
		echo "Comments:".$iltcomments."<br />";
	  }
	  	  if ($totaldrinkqty !== 0 && $cd > 0) {
		echo $cd." canned drinks<br />";
		echo "Comments:".$cdcomments."<br />";
	  }


	}
	$totalamount = 0.00;

	define('rcrprice', 3.5);
	define('scrprice', 3.5);
	define('vegprice', 2);
	define('eggprice', 0.5);
	define('itprice', 1.2);
	define('icprice', 1.2);
	define('iltprice', 1.5);
	define('cdprice', 1.5);
	
	$totalamount = $rcr * rcrprice
				 + $scr * scrprice
				 + $veg * vegprice
				 + $egg * eggprice
				 + $it * itprice
				 + $ic * icprice
				 + $ilt * iltprice
				 + $cd * cdprice;

	echo "Subtotal: $".number_format($totalamount,2)."<br />";
	


?>
<a href="successfulpayment.php" class="button">Proceed to Payment</a>

  <footer>
	<small><i>Copyright &copy; 2018 Online Canteens
		</i><small><br>
	E-mail: <a href="mailto:baoxiu@chew.com">baoxiu@chew.com
</footer>

</div>
</body>
</html>