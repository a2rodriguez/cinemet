<?php
    try {
      $bdd = new PDO('mysql:host=Localhost;dbname=vente','root','');
    } catch (PDOException $e){
        print "Erreur !: " . $e ->getMessage() . "<br>";
        die();
    }

    $nomp = $_POST['nomp'];

    $coul = $_POST['coul'];

    $tarif = $_POST['pds'];
    $sql= $bdd->prepare("INSERT INTO produits (nomp, coul,pds) VALUES ('$nomp', '$coul', '$tarif')");
    $sql ->execute();
    header('Location: requete.php');

  ?>
