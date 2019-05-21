<?php

include('bdd_connect.php');

//Préparer l'affichage

$pdoStat = $conn->prepare('SELECT * FROM films ORDER BY id_film DESC');

$executeIsOk = $pdoStat->execute();

//récuperation de résultat

$film = $pdoStat->fetchAll();
//var_dump($film);

?>
<!doctype html>
<html>
<head>
<title>Affiche PDO</title>
<meta charset="utf-8">
</head>
<body>
<ul>
<?php foreach($film as $sarym): ?>
    <li><?= $sarym['titre'] ?> - <?= $sarym['categorie'] ?> 
    <a href="suppr_pdo.php?fafao=<?=$sarym['id_film']?>">Supprimer la ligne</a> - 
    <a href="modif_pdo.php?soloy=<?=$sarym['id_film']?>">Modifier la ligne</a>
</li>
<?php endforeach; ?>
</ul>
</body>
</html>