<?php

if (isset($_GET['id'])) {
	$concetion = mysqli_connect('localhost', 'root', '', 'projet_stage');
	$id = $_GET['id'];
	$req1 = "DELETE FROM utilisateur WHERE id_user= $id ";
	$exe1 = mysqli_query($concetion, $req1);
	header("location:utilisateur.php");
}
?>