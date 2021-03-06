<!DOCTYPE html>
<html>
<head>
    <title>Gestion du site</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../connexion.css">
    <link rel="stylesheet" href="../style/form.css">
    <link rel="stylesheet" href="../style/styla.css">
    <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- link (FIN) BOOSTRAP 4.3.1 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        .roww {
            display: flex;
        }
        .column {
            flex: 40%;
            text-align: left;
            margin-top: 0;
            background-color: blue;
            
            columns: 3 270px; 
            column-rule: 2px dotted lightblue;
        }
        .column a, hover{
            color:#fff;
        }
        .column li{
        list-style: none;
        }
        #loko{
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
  <?php include('headera.php'); ?>
  <div class="titre">- WEB ADMINISTRATION-</div>
<!--EMPLACEMENT Nom $_SESSION ['nom']d'utilisateur-->

<div class="fonony80" style="background-color:#DFE9FF">
<div class="roww">
    <div class="column">
        <div class="mifindra">
            <h2 id="loko">LIST</h2><br>
                <ul>
                    <li><a href="liste_utilisateur.php">Users</a></li><br>    
                    <li><a href="liste_films.php">Movies</a></li><br>    
                    <li><a href="liste_genres.php">Movie type</a></li><br>    
                    <li><a href="liste_acteurs.php">Actors</a></li><br>    
                    <li><a href="liste_realisateurs.php">Producors</a></li><br>    
                </ul>
        </div>
        <div class="mifindra">
            <ol>
                <h2 id="loko">APPEND</h2><br>
                <li><a href="inscription.php">Append user(s)</a></li><br>    
                <li><a href="ajoutff.php">Append movie(s)</a></li><br>   
                <li><a href="ajout_genre.php">Append type of movie</a></li><br>    
                <li><a href="ajout_acteur.php">Append Actor(s)</a></li><br>    
                <li><a href="ajout_realisateur.php">Append Producor(s)</a></li><br><br>
                
            </ol>
        </div>
        <div class="mifindra">
            <h2 id="loko">UPDATE</h2><br>
                <ul>
                    <li><a href="maj_utilisateur.php">Users</a></li><br>    
                    <li><a href="maj_films.php">Movies</a></li><br>    
                    <li><a href="maj_genres.php">Movie type</a></li><br>    
                    <li><a href="maj_acteurs.php">Actors</a></li><br>    
                    <li><a href="maj_realisateurs.php">Producors</a></li><br>    
            </ul>
        </div>
    </div>
    
</div><br><br>
<!--- EMPLACEMENT Bouton DECONNEXION --->
</div><br><br>
    <?php include('fotera.php'); ?>
</body>
</html>
