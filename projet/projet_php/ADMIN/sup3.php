<?php

if (isset($_GET['id'])) {
	$concetion = mysqli_connect('localhost', 'root', '', 'projet_stage');
	$id = $_GET['id'];
	$req1 = "DELETE FROM commande WHERE id_comm= $id ";
	$exe1 = mysqli_query($concetion, $req1);
	header("location:commande.php");
}
?>