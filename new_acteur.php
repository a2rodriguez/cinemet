<?php
include ('bdd_connect.php');

$nom= $_POST['nacteur'];

$sql = ("INSERT INTO `acteurs` (`designation`) VALUES ('".$nom."')");
$rep= $conn->prepare($sql);

$rep->execute([$nom]);

if($rep){
    echo "Acteur ajouté !";
}else{
    echo "Acteur PAS ajouté !";
}

$conn=null;
?>





