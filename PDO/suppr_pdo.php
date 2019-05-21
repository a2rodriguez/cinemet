<?php

include('bdd_connect.php');

//Préparer l'affichage

$pdoStat = $conn->prepare('DELETE FROM films WHERE id_film=:id LIMIT 1');

//liaison au paramètre nommé
$pdoStat->bindValue(':id',$_GET['fafao'], PDO::PARAM_INT);

//Execution de la requêt
$executeIsOk = $pdoStat->execute();

if ($executeIsOk){
    $message = "Le film est supprimé";
}else{
    $message = "Echec de la suppression!";
}


?>
<!doctype html>
<html>
<head>
<title>Suppression PDO</title>
<meta charset="utf-8">
</head>
<body>
<h1>SUPRESSION</h1>
<p><?= $message ?></p>
</body>
</html>