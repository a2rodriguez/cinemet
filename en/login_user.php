<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <!--<form action="verif_login.php" method="POST">-->
        <!--<div class="container">-->
        <div class="lamina">
        <div class="col-25">
          <label for="uname"><b>Login</b></label>
        </div>
        <div class="col-50">
          <input type="text" placeholder="Login .." name="uname" required>
        </div>
        <div class="col-25">
          <label for="psw"><b>Password</b></label>
        </div>
        <div class="col-75">
          <input type="password" placeholder="Password .." name="psw" required>
        </div><br><br>

          
          <!--
          <label>
            <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
          </label><br><br>
            -->
        </div>
        
        <button type="submit" name="submit">Connexion</button><br>
        <!---<div class="container" style="background-color:#f1f1f1">-->
        <div class="lamina">
              <!--<button type="button" class="cancelbtn">Annuler</button>-->
              <span class="psw"><a href="#">Forgotten password !</a></span>
        </div>
        
        
      </form> 
</div>
<br>


<?php include('fotera.php'); ?>

</body>
</html>
