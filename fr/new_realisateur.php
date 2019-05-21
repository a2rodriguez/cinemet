<?php
include ('bdd_connect.php');

$nomreal= $_POST['nrealisateur'];

$sql = ("INSERT INTO `realisateurs` (`nom`) VALUES ('".$nomreal."')");
$rep= $conn->prepare($sql);

$rep->execute([$nomreal]);

if($rep){
    echo "Réalisateur ajouté !";
}else{
    echo "Réalisateur PAS ajouté !";
}

$conn=null;
?>


