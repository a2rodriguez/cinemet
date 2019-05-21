<!Doctype html>
<html>
    <head>
    <title>CINEMET - Recherche</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="font-awesome.min.css" rel="stylesheet">
            <script src="jquery-1.12.4.min.js"></script>
            <link rel="stylesheet" href="style/reset.css">
            <link rel="stylesheet" href="style/style.css">
            


            <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <!-- link (FIN) BOOSTRAP 4.3.1 -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



            <!----- *** DEBUT *** ITY ILAY AVY TARY @ ILAY METY ------->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


            <script rel="text/javascript" src="script/app.js"></script>
            <link rel="stylesheet" href="css/animate.css">
            <!-----*** FIN *** ITY ILAY AVY TARY @ ILAY METY ------->

            <script rel="text/javascript" src="script/script.js"></script>
            <!--- (DEBUT) MENU ICONE----->

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            
            <!--- (FIN) MENU ICONE----->

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="style/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

            <style>
            .kadra{
                margin-left: auto;
                margin-right: auto;
                padding: 8px;
                background-color: #C9DCFF;
                border: 2px solid blue;
                border-radius: 10px;
                align-items: center;

                width: 100%;
                /*height:100%;*/

                text-align: center;
            }
            </style>

    </head>
    <body>
    <?php include ('headera.php'); ?>
    <br><br>
    
    <div class="row">
        <div class="col-md-3">

            <div class="kadra" align="center"><a href="inscription.php">S'inscrire<br> ou <br> Se connecter</a>
            <p>Accéder à la page d'administration du site, en tant qu'utilisateur possedant un compte vous pouvez vous connecter avec votre login et mot de passe.
                <br>Vous pouvez faire les opérations suivantes AJOUTER, MODIFIER et même SUPPRIMER des informations de la base de données</p><br>
            </div>
        </div>
        
        <div class="col-md-8 fonony">
            <div class="kadra">
                <div align="center"><b>SELECTIONNEZ LES VALEURS A CHERCHER</b></div>
            </div>
        
             <div class="row">
                <div class="col-md-4" align="center">
                    <form name="rech_genre" action="resul_genre.php" method="POST">
                        <label for="rgenre">Genre</label><br>
                        <?php
                        include ('bdd_connect.php');
                        $sql = $conn->query('SELECT * FROM genre ORDER BY description ASC');
                        ?><label for="i_genre"></label>
                        <select name='i_genre' id="i_genre" onchange='send_genre()'>
                            <option>«.. Genre ..»</option>
                        <?php                
                        while ($row = $sql->fetch()) {
                            echo "<option  value=".$row['id_genre'].">".$row['description']."</option>";
                        }
                        ?>
                        </select>
                    </form>
                </div>
                
                <div class="col-md-4" align="center">
                <form name="rech_acteur" action="resul_acteur.php" method="POST">
                    <label for="ract">Acteurs</label>
                    <?php
                        include ('bdd_connect.php');
                        $sqla = $conn->query('SELECT * FROM acteurs ORDER BY designation ASC');
                        ?><label for="i_acteur"></label>
                        <select name='i_acteur' id='i_acteur' onchange='send_acteur()'>
                        <option>«.. Acteur ..»</option>
                        <?php                
                        while ($row = $sqla->fetch())
                        {
                            echo "<option  value=".$row['id_act'].">".$row['designation']."</option>";
                        }
                        ?></select> 
                    </form>
                    <?php
                    $sqla->closeCursor();
                    $conn = null;
                ?>
                </div>
                
                <div class="col-md-4" align="center">
                    <form name="rech_realisateur" action="resul_realisateur.php" method="POST">
                        <label for="rreal">Réalisateurs</label>
                        <?php
                            include ('bdd_connect.php');
                                $sqlr = $conn->query('SELECT * FROM realisateurs ORDER BY nom ASC');
                                ?><label for="i_real"></label>
                                <select name='i_real' id='i_real' onchange='send_realisateur()'>
                                    <option>«.. Réalisateur ..»</option>
                                <?php                
                                while ($row = $sqlr->fetch())
                                {
                                    echo "<option  value=".$row['id_real'].">".$row['nom']."</option>";
                                }
                                ?></select>
                    </form>
                        <?php
                        $sqlr->closeCursor();
                        $conn = null;
                    ?>
                </div>
            </div>
            </div>

    </div><br><br><br>
    
    <?php include ('fotera.php'); ?>
    <!------------------(DEBUT) Submit recherche par GENRE --------------------------->
    <script type="text/javascript">
        function send_genre()
        { 
            document.forms['rech_genre'].submit();
        }
    </script>
    <!------------------(FIN) Submit recherche par GENRE --------------------------->


    <!------------------(DEBUT) Submit recherche par ACTEUR --------------------------->
    <script type="text/javascript">
        function send_acteur()
        { 
            document.forms['rech_acteur'].submit();
        }
    </script>
    <!------------------(FIN) Submit recherche par ACTEUR --------------------------->


   <!------------------(DEBUT) Submit recherche par REALISATEUR --------------------------->
   <script type="text/javascript">
        function send_realisateur()
        { 
            document.forms['rech_realisateur'].submit();
        }
    </script>
    <!------------------(FIN) Submit recherche par REALISATEUR ---------------------------> 
    </body>
    

</html>


