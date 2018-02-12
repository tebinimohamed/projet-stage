<?php session_start(); ?>
<?php 
if(isset($_POST['btn'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$concetion = mysqli_connect('localhost','root','','projet_stage');
$req="SELECT * FROM utilisateur WHERE username='$username' and password='$password'";
$exe=mysqli_query($concetion,$req);
$row = mysqli_fetch_array($exe);
if (($row['username'] == $username) && ($row['password'] == $password)==1) {
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="login111.php" method="post">
	<p>welcome</p>
	<a href="login111.php">lougout</a>
</form>
</body>
</html>
	<?php
}
else
{echo "verifier";}

}
?>