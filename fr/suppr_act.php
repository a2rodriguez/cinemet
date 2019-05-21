<?php

include('bdd_connect.php');

//Préparer l'affichage

$pdoStat = $conn->prepare('DELETE FROM acteurs WHERE id_act=:id LIMIT 1');

//liaison au paramètre nommé
$pdoStat->bindValue(':id',$_GET['fafao'], PDO::PARAM_INT);

//Execution de la requête
$executeIsOk = $pdoStat->execute();

if ($executeIsOk){
    $message = "L'acteur est supprimé";
}else{
    $message = "Echec de la suppression!";
}


?>
<!doctype html>
<html>
<head>
<title>Suppression ACTEUR</title>
<meta charset="utf-8">
</head>
<body>
<h1>SUPRESSION</h1>
<p><?= $message ?></p>
<?php 
header ('Location: maj_acteurs.php'); 
//header ('Location: administration.php');
?>
</body>
</html>