<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="connexion.css">

</head>
<body>
  <?php include('header.html'); ?>
  <div class="container">
        <form action="ajout_utilisateur.php" method="POST">
            <div class="container boaty">
                <h2>Compte utilisateur</h2>
                <p>Remplir ce formulaire pour créer votre compte.</p>
                

                <label for="nom"><b>Nom</b></label>
                <input type="text" placeholder="Entez votre nom .." name="nom"><br>

                <label for="prenom"><b>Prenom</b></label>
                <input type="text" placeholder="Entrez votre prénom .." name="prenom"><br>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Entez votre adresse mail" name="email" required><br>

                <label for="ulogin"><b>Login</b></label>
                <input type="text" placeholder="Entrez votre login .." name="ulogin" required><br>

                <label for="psw1"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe .." name="psw1" required><br>

                <label for="psw2"><b>Verification mot de passe</b></label>
                <input type="password" placeholder="Verfification mot de passe .." name="psw2" required><br>
            <!--
                <label for="typuser"><b>Type utilisateur</b></label>
                            <select name="typuser" id="catcsa">
                                <option value=""></option>
                                <option>Administrateur Simplon</option>
                                <option>Etudiant</option>
                                <option>Membre de jury</option>       
                            </select>
            -->
                


                <button type="submit" class="registerbtn" name="envoyer">Enregistrer</button><br><br>
                
            </div>
            <br><br>
            <div class="container signin">
                    <p>Déjà un compte? <a href="connexion.html">Se connecter </a>.</p>
            </div>
            
            
            </form>
        </div>

    <?php include('footer.html'); ?>
</body>
</html>
