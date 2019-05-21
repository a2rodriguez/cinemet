<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Test Requête SQL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php
    try {
      $bdd = new PDO('mysql:host=Localhost;dbname=vente','root','');
    } catch (PDOException $e){
        print "Erreur !: " . $e ->getMessage() . "<br>";
        die();
    }
  ?>
  <center><h1> Afficher les informations de la BDD </h1></center>

  <h5>Tous les détails de tous les clients :</h5>

<?php

  $sql = $bdd -> prepare ("SELECT * FROM clients");
  $sql->execute();

  while ( $info = $sql->fetch())
  {
      echo ("nom : ".$info['nomc']." | Ville :".$info['ville']."<br>");
  }


  $sql->closeCursor();

?>

  <h5>Les numéros et les noms des produits de couleur rouge :</h5>

    <?php
  $query1 = $bdd->prepare("SELECT np, nomp FROM produits WHERE coul='rouge'");
  $query1->execute();

  while ($info1 = $query1->fetch())
  {
    echo ("numéro produit : ".$info1['np']." | &nbsp Nom Produit : ".$info1['nomp']."<br>");
  }

$query1->closeCursor(); // Termine le traitement de la requête
?>
<h5> Les noms des clients ayant acheté :</h5>
<?php
  $query2 = $bdd->prepare("SELECT DISTINCT c.nomc FROM clients c, ventes v WHERE  v.nc = c.nc");
  $query2 ->execute();

  while ($info2 = $query2->fetch())
{
  echo ("Nom des clients ayant acheté : ".$info2['nomc']."<br>");
}

$query2 -> closecursor();

?>
</body>
</html>
