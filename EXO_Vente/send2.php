<?php
    try {
      $bdd = new PDO('mysql:host=Localhost;dbname=vente','root','');
    } catch (PDOException $e){
        print "Erreur !: " . $e ->getMessage() . "<br>";
        die();
    }

    $nomc = $_POST['nomc'];

    $villec = $_POST['villec'];

    $sql = $bdd->prepare("INSERT INTO clients (nomc, ville) VALUES ('$nomc', '$villec')");
    $sql->execute();

    header('Location: requete.php');

  ?>
