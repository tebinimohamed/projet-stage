<?php
if(isset($_POST['btn1'])) {
$nom = $_POST['nom'];
$commentaires = $_POST['commentaires'];
$datee = $_POST['datee'];


$concetion = mysqli_connect('localhost','root','','projet_stage');
$query = "INSERT INTO annonce (nom,commentaire,datee)";
$query .= "VALUES ('$nom','$commentaires','$datee')";
$resultat = mysqli_query($concetion,$query);    

 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 die($file);
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO annonce(file,type,size) VALUES('$file','$file_type','$file_size')";
 echo $file;
 mysql_query($sql); 
}
}
?>
