<?php
if(isset($_POST['commande'])) {
$concetion = mysqli_connect('localhost','root','','projet_stage');
$req="SELECT * FROM utilisateur WHERE type='Association'";
$exe=mysqli_query($concetion,$req);
while($row = mysqli_fetch_assoc($exe)){
echo $row['type'];?> </br> <?php
echo $row['nom'];?> </br> <?php
}
}
?>
<?php
if(isset($_POST['commande'])) {
$nom=$_POST['nom'];
$concetion = mysqli_connect('localhost','root','','projet_stage');
$query = "INSERT INTO commande (date_commande,nom)";
$query .= "VALUES (NOW(),'$nom')";
$resultat = mysqli_query($concetion,$query);  
echo $nom;
}
?>