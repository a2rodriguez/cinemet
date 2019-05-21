<?php

include('bdd_connect.php');

//requete
$pdoStat = $conn->prepare('UPDATE films SET  titre=:lohateny, categorie=:katego, duree=:fdure, infos=:unfiaux, avis=:note, cat_csa=:kat_csa, WHERE id_film=:idfilma LIMIT 1');

/*, :categorie, :duree, :infos, :avis, :liphoto, :cat_csa, :id_genre, :id_real)');

$pdoStat->bindValue(':titre', $_POST['lohateny'], PDO::PARAM_STR);
$pdoStat->bindValue(':categorie', $_POST['katego'], PDO::PARAM_STR);
$pdoStat->bindValue(':duree', $_POST['fdure'], PDO::PARAM_STR);
$pdoStat->bindValue(':infos', $_POST['unfaux'], PDO::PARAM_STR);
$pdoStat->bindValue(':avis', $_POST['note'], PDO::PARAM_STR);
$pdoStat->bindValue(':cat_csa', $_POST['kat_csa'], PDO::PARAM_STR);
$pdoStat->bindValue(':id_genre', $_POST['zanra'], PDO::PARAM_STR);
$pdoStat->bindValue(':id_real', $_POST['realy'], PDO::PARAM_STR);*/


//liaison au paramètre nommé
$pdoStat->bindValue(':id_film',$_POST['idfilma'], PDO::PARAM_INT);
$pdoStat->bindValue(':titre', $_POST['lohateny'], PDO::PARAM_STR);
$pdoStat->bindValue(':categorie', $_POST['katego'], PDO::PARAM_STR);
$pdoStat->bindValue(':duree', $_POST['fdure'], PDO::PARAM_STR);
$pdoStat->bindValue(':infos', $_POST['unfaux'], PDO::PARAM_STR);
$pdoStat->bindValue(':avis', $_POST['note'], PDO::PARAM_STR);
$pdoStat->bindValue(':cat_csa', $_POST['kat_csa'], PDO::PARAM_STR);


//EXECUTE la requete
$executeIsOk = $pdoStat->execute();

if($executeIsOk ){
    $message = "Mise à jour effectué";
}else{
    $message = "Problème de mise à jour!";
}
?>
<!doctype html>
<html>
<head>
<title>MODIFICATION EN PDO</title>
<meta charset="utf-8">
</head>
<body>
<h1>MISE A JOUR </h1>
<p><?= $message ?></p>
</body>
</html>