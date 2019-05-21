<?php

include('bdd_connect.php');

//Préparer l'affichage

$pdoStat = $conn->prepare('DELETE FROM genre WHERE id_genre=:id LIMIT 1');

//liaison au paramètre nommé
$pdoStat->bindValue(':id',$_GET['fafao'], PDO::PARAM_INT);

//Execution de la requête
$executeIsOk = $pdoStat->execute();

if ($executeIsOk){
    $message = "Le genre a été supprimé";
}else{
    $message = "Echec de la suppression!";
}


?>
<!doctype html>
<html>
<head>
<title>Suppression GENRE</title>
<meta charset="utf-8">
</head>
<body>
<h1>SUPRESSION</h1>
<p><?= $message ?></p>
<?php 
header ('Location: maj_genres.php'); 
//header ('Location: administration.php');
?>
</body>
</html>