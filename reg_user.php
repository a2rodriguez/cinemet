<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- link (FIN) BOOSTRAP 4.3.1 -->
<link rel="stylesheet" href="style/reset.css" >
  <link rel="stylesheet" href="style/style.css" >
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ccc;
}
/*
* {
  box-sizing: border-box;
}
*/

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  box-sizing: content-box;
  width: 40%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
    <?php include('header1.php'); ?>

<div class="titre">- Nouvel utilisateur -</div>

    <form action="" method="POST">
      <div class="container boaty">
        <h2>Compte utilisateur</h2>
        <p>Remplir ce formulaire pour créer votre compte.</p>
        <hr>

        <label for="nom"><b>Nom</b></label>
        <input type="text" placeholder="Entez votre nom .." name="nom">

        <label for="prenom"><b>Prenom</b></label>
        <input type="text" placeholder="Entrez votre prénom .." name="prenom">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Entez votre adresse mail" name="email" required>

        <label for="ulogin"><b>Login</b></label>
        <input type="text" placeholder="Entrez votre login .." name="ulogin" required>

        <label for="psw1"><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrez votre mot de passe .." name="psw1" required>

        <label for="psw2"><b>Verification mot de passe</b></label>
        <input type="password" placeholder="Verfification mot de passe .." name="psw2" required>
    <!--
        <label for="typuser"><b>Type utilisateur</b></label>
                    <select name="typuser" id="catcsa">
                        <option value=""></option>
                        <option>Administrateur Simplon</option>
                        <option>Etudiant</option>
                        <option>Membre de jury</option>       
                    </select>
    -->
        <hr>


        <button type="submit" class="registerbtn" name="envoyer">Enregistrer</button><br><br>
          
      </div>
      <br><br>
      <div class="container signin">
            <p>Déjà un compte? <a href="login_user.php">Se connecter </a>.</p>
      </div>
      
      
    </form>

<br><br>

<!-- RESULTAT FENETRE MODALE -->
<?php include('db_connect.php'); 



/*if(isset($_POST["submit"])) and (isset($_POST["psw1"])) == (isset($_POST["psw2"])){*/
if(isset($_POST["envoyer"])){
    $anarana = $_POST['nom'];
    $fanarana = $_POST['prenom'];
    $mailaka = $_POST['email'];
    $lokin = $_POST['ulogin'];
    $passw1 = $_POST['psw1'];
    $passw2 = $_POST['psw2'];

  /*$sql  = "INSERT INTO utilisateur (`nom`, `prenom`, `mail`, `ulogin`, `motdepasse`) VALUES ('".$anarana."', '".$fanarana."', '".$mailaka."', '".$lokin."', '".$passw1."')";*/
  /*$sql  = "INSERT INTO utilisateur (nom, prenom, mail, ulogin, motdepasse) VALUES ('".$anarana."', '".$fanarana."', '".$mailaka."', '".$lokin."', '".$passw1."')";*/
  $sql  = "INSERT INTO utilisateur (nom, prenom, mail, ulogin, motdepasse) VALUES ('".$anarana."', '".$fanarana."', '".$mailaka."', '".$lokin."', '".$passw1."')";

  //echo "Requête : ".$sql."<br";
  if ($conn->query($sql) === TRUE) {
      echo "Utilisateur ajouté !"."<br>";
    }else{
      echo "NON ajouté !"."<br>";
    }
}else{
    echo "Verifier votre formulaire,<br>Le mot de passe PAS IDENTIQUE !"."<br";
}

$conn->close();

?>




<?php include('footer.php'); ?>

</body>
</html>
