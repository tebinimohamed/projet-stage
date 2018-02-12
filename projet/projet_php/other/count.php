<?php
$concetion = mysqli_connect('localhost','root','','projet_stage');
$req="SELECT COUNT(id) as nombre_liste FROM annonce";
$exe=mysqli_query($concetion,$req);
$data = mysqli_fetch_array($exe);
print_r($data);

$nombre_liste = $data['nombre_liste'];
$perPage = 5;
$cPage = 1;
$nbPage = ceil($nombre_liste/$perPage);
if (isset($_GET['p']) && ($_GET['p']>0) &&($_GET['p']<=$nbPage)) {
	$cPage = $_GET['p'];
}
else
{
	$cPage =1;
}
$sql = "SELECT * FROM annonce ORDER BY id DESC LIMIT ".(($cPage-1)*$perPage).",$perPage";
$req = mysqli_query($concetion,$sql);
while ($data=mysqli_fetch_assoc($req)) {
	echo $data['nom'];
	echo $data['commentaire'];

}
for ($i=1; $i <=$nbPage ; $i++) {
	if ($i==$cPage) {
		echo " $i /";
	}else{
echo "<a href=\"count.php?p=$i\">$i</a>/"; 

}}
?>