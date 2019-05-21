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
  <link rel="stylesheet" href="style/form.css" >

</head>
<body>
    <?php include('headera.php'); ?>
    <div class="titre">- Connexion -</div>
    <div class="fonony">
      <form action="administration.php" method="POST">
        <div class="container">
        <div class="col-50">
          <label for="uname"><b>Login</b></label>
        </div>
        <div class="col-50">
          <input type="text" placeholder="Login .." name="uname" required>
        </div>
        <div class="col-50">
          <label for="psw"><b>Mot de passe</b></label>
        </div>
        <div class="col-75">
          <input type="password" placeholder="Mot de passe .." name="psw" required>
        </div><br><br>

          <button type="submit" name="submit">Login</button><br>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
          </label><br><br>
            
        </div><br><br>
        <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Annuler</button>
              <span class="psw"><a href="#">Mot de passe oublié !</a></span>
        </div>
        
        
      </form> 
</div>
<br><br>


<!--
<div
  id="dialog"
  role="dialog"
  aria-labelledby="dialog-title"
  aria-describedby="dialog-desc"
  aria-modal="true"
  aria-hidden="true"
  tabindex="-1"
  class="c-dialog">
  <div role="document" class="c-dialog__box">
    <h2 id="dialog-title">Mot de passe oublié !</h2>
    <p id="dialog-desc">Je suis une fenêtre modale accessible.</p>


    <label for="mailaka">Entrez votre adresse mail</label>
    <input type="email" name="mailaka" id="titre" placeholder="Votre mail ..">
  </div>
</div>

-->
<?php include('fotera.php'); ?>
<!--
</body>
</html>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Article : Une fenêtre modale accessible</title>
  </head>
  <body class="js-page">
    <main class="js-document">
      <button 
        type="button" 
        aria-haspopup="dialog"
        aria-controls="dialog">Ouvrir ma fenêtre modale
      </button>
    </main>
    <div 
      id="dialog"
      role="dialog" 
      aria-labelledby="dialog-title" 
      aria-describedby="dialog-desc"
      aria-modal="true"
      aria-hidden="true"
      tabindex="-1" 
      class="c-dialog">
      <div role="document" class="c-dialog__box">
        <button 
          type="button" 
          aria-label="Fermer" 
          title="Fermer cette fenêtre modale"
          data-dismiss="dialog">X
        </button>
        <h2 id="dialog-title">Ma fenêtre modale</h2>
        <p id="dialog-desc">Je suis une fenêtre modale accessible.</p>
        <form action="" method="post">
          <p>
            <label for="email">Email</label><br />
            <input type="email" id="email" />
          </p>
          <p>
            <label for="password">Mot de passe</label><br />
            <input type="password" id="password" />
          </p>
          <p>
            <button type="submit">Valider</button>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
-->