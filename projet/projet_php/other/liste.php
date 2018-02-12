<?php
$concetion = mysqli_connect('localhost','root','','projet_stage');
$query = "SELECT * FROM annonce";
$resultat = mysqli_query($concetion,$query);
?>