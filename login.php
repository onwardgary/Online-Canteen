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
			<div style="float:left" ><h1> Online Canteens</h1></div>
			<a href="cart.php"><a href="shopping_cart.jpg"><img src="shopping_cart.jpg" width="70" height="30"></a></a>
            <a href="trackorder.html">Track Order</a>
			<a href="login.php">Login Page</a>
	</ul>
  </nav>	
  </div>
<div id="rightcolumn">
<div class="content"> 
<?php //
include "dbconnect.php";
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];
/*
  $db_conn = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }
*/
$password = md5($password);
  $query = 'SELECT * from users'
           ."WHERE user_id='$userid' "
           ."AND password='$password'";
// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;    
  }
  $dbcnx->close();
}
?>
<html>
<body>
<h1>Login</h1>
<?php
  if (isset($_SESSION['valid_user']))
  {
    echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
    echo '<a href="logout.php">Log out</a><br />';
  }
  else
  {
    if (isset($userid))
    {
      // if they've tried and failed to log in
      echo 'Could not log you in.<br />';
    }
    else 
    {
      // they have not tried to log in yet or have logged out
      echo 'You are not logged in.<br />';
    }

    // provide form to log in 
    echo '<form method="post" action="login.php">';
    echo '<table>';
    echo '<tr><td>Userid:</td>';
    echo '<td><input type="text" name="userid"></td></tr>';
    echo '<tr><td>Password:</td>';
    echo '<td><input type="password" name="password"></td></tr>';
    echo '<tr><td colspan="2" align="center">';
    echo '<input type="submit" value="Log in"></td></tr>';
    echo '</table></form>';
  }
?>
<div class="reg">
<a href="registration.html">Register</a></div>
</div>
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