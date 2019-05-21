<?php
include ('bdd_connect.php');

$nom_genre= $_POST['ngenre'];

$sql = ("INSERT INTO `genre` (`description`) VALUES ('".$nom_genre."')");
$rep= $conn->prepare($sql);

$rep->execute([$nom_genre]);

if($rep){
    echo "Genre de film ajouté !";
}else{
    echo "Genre de film PAS ajouté !";
}

$conn=null;
?>


