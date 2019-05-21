<?php

include('bdd_connect.php');

//requete
$pdoStat = $conn->prepare('SELECT * FROM films WHERE id_film=:mdf');

//liaison au paramètre nommé
$pdoStat->bindValue(':mdf',$_GET['soloy'], PDO::PARAM_INT);

//executer la requête
$executeIsOk = $pdoStat->execute();

//on recupère le film

$idfilm = $pdoStat->fetch();

//var_dump($idfilm);

?>
<!doctype html>
<html>
<head>
<title>Modification PDO</title>
<meta charset="utf-8">
</head>
<body>
<h1>MODIFICATION</h1>
<form action="modifier.php" method="POST">
    <input type="hidden" name="idfilma" value="<?= $idfilm['id_film']; ?>"> <!-- On en a besoin lorsque cherche le ID à supprimer -->
        <label for="lohateny">Titre: </label><input type="text" name="lohateny" value="<?= $idfilm['titre']; ?>"><br>
        Catégorie:<input type="text" name="katego" value="<?= $idfilm['categorie']; ?>"><br>
        Durée:<input type="text" name="fdure" value="<?= $idfilm['duree']; ?>"><br>
        Infos:<input type="text" name="unfaux" value="<?= $idfilm['infos']; ?>"><br>
        Avis:<input type="text" name="note" value="<?= $idfilm['avis']; ?>"><br>
        Catégorie CSA:<input type="text" name="kat_csa" value="<?= $idfilm['cat_csa']; ?>"><br>
        <!--Genre:<input type="text" name="zanra" value="<?= $idfilm['_id_genre']; ?>"><br>
        Réalisateur:<input type="text" name="realy" value="<?= $idfilm['id_real']; ?>"><br>
-->
        <input type="submit" name="Envoyer" value="Enregistrer les modifications">
    </form>
</body>
</html>

