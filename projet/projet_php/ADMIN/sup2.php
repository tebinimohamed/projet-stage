<?php

if (isset($_GET['id'])) {
	$concetion = mysqli_connect('localhost', 'root', '', 'projet_stage');
	$id = $_GET['id'];
	$req1 = "DELETE FROM annonce WHERE id= $id ";
	$exe1 = mysqli_query($concetion, $req1);
	header("location:annonce.php");
}
?>