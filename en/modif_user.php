<!DOCTYPE html>
<html>
    <head>
        <title>Mise à jour utilisateur</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="connexion.css">
        <link rel="stylesheet" href="style/form.css">
    </head>
<body>
  <?php include('headera.php'); ?>
  <div class="titre">- UTILISATEUR MIS A JOUR-</h2></div>

  <?php
    include('bdd_connect.php');

    //requete
    $pdoStat = $conn->prepare('SELECT * FROM utilisateur WHERE iduser=:mdfu');

    //liaison au paramètre nommé
    $pdoStat->bindValue(':mdfu',$_GET['iduser'], PDO::PARAM_INT);

    //executer la requête
    $executeIsOk = $pdoStat->execute();


  ?>

  <div class="fonony">
        <form action="mod_user.php" method="POST">
            <!--<div class="container boaty">-->
                
                <p>Verifier le formulaire pour la modofication.</p>
                

                <label for="iduser"><b>ID User</b></label>
                <input type="text" name="iduser"><br>

                <label for="nom"><b>Nom</b></label>
                <input type="text" name="nom"><br>

                <label for="prenom"><b>Prenom</b></label>
                <input type="text" name="prenom"><br>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Entez votre adresse mail" name="email" required><br>

                <label for="ulogin"><b>Login</b></label>
                <input type="text" placeholder="Entrez votre login .." name="ulogin" required><br>
                <div class="col-50">
                    <label for="psw1"><b>Mot de passe</b></label>
                </div>
                <div class="col-75">
                    <input type="password" placeholder="Entrez votre mot de passe .." name="psw1" required><br>
                </div>

                <div class="col-50">
                    <label for="psw2"><b>Verification mot de passe</b></label>
                </div>
                <div class="col-75">
                    <input type="password" placeholder="Verfification mot de passe .." name="psw2" required><br>
                </div>

                <button type="submit" class="registerbtn" name="envoyer">Enregistrer</button><br><br>
            </form>
            <div class="col-md-3"></div>
        </div>
        <br><br>
        <?php include('fotera.php'); ?>
</body>
</html>