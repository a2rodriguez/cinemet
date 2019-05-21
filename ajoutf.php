<!Doctype html>
<html>
    <head>
    <title>CINEMET - Ajout nouveau film</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="font-awesome.min.css" rel="stylesheet">
            <script src="jquery-1.12.4.min.js"></script>
            <link rel="stylesheet" href="style/reset.css">
            <link rel="stylesheet" href="style/style.css">
            <link rel="stylesheet" href="style/form.css">


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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <!--- (FIN) MENU ICONE----->

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="style/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>





    </head>
    <body>
    <?php include ('headera.php'); ?>
    <?php //include ('menu.php'); ?>

        <div class="titre">- AJOUT FILM -</h2></div>
            
 

<!--======= TENA IZY =========-->
        <div class="fonony"> <!--  container boaty-->
                <!--
                <form action="ajouterfilms.php" method="POST">-->
                <form action="mampiditra.php" method="POST">    

                <!--<form action="" method="POST">-->
                <div class="row">
                <div class="col-25">
                    <label for="titre">Titre</label>
                </div>
                <div class="col-75">
                    <input type="text" name="titre" id="titre" placeholder="Titre du film..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="categorie">Catégorie</label>
                </div><br>
                
                <?php
                    include ('bdd_connect.php');
                    $sql = $conn->query('SELECT * FROM genre ORDER BY description ASC');
                    ?><label for="l_genre"></label>
                    <select name='l_genre' onchange="selgenre(this)">
                    <?php                
                    while ($row = $sql->fetch())
                    {
                        
                        echo "<option  value=".$row['id_genre'].">".$row['description']."</option>";
                    }

                    ?></select> <!-- Source : https://www.xul.fr/html5/select.php --->
                    <?php
                    $valgenre = "<span id='ikaty'></span>"; //-- ID récuperé via JS
                    $desgenre = "<span id='katy'></span>"; //-- Description récuperée via JS

                    
                    echo "<br>"."ID = ".$valgenre." - Genre = ".$desgenre;
                    ?>
                    <input type="hidden" name="i_genre" value="<?php echo $valgenre; ?>"><br>
                    <input type="hidden" name="l_genre" value="<?php echo $desgenre; ?>">                    
                    <?php
                    $sql->closeCursor();

                    $conn = null;

                    ?>


                <!--
                <div class="col-75">
                    <select name="categorie" id="categorie">
                        <option value=""></option>
                        <option >Drame</option>
                        <option >Comédie</option>
                        <option >Thriller</option>
                        <option >Film d'action</option>
                        <option >Film fantastique</option>
                        <option >Film d'horreur</option>
                        <option >Film de science fiction</option>
                        <option >Polar</option>
                        <option >Film d'époque</option>
                        <option >Film d'animation</option>
                        <option >Conte</option>
                        <option >Western</option>
                        <option >Parodie</option>
                        <option >Comédie musicale</option>
                        <option >Documentaire</option>
                        <option >Blockbuster</option>
                        <option >Road movie</option>
                        <option >Slasher</option>
                    </select>
                </div>
                -->
                </div>

                



                <div class="row">
                <div class="col-25">
                <label for="catcsa">Catégorie CSA</label>
                </div>
                <div class="col-75">
                    <select name="catcsa" id="catcsa">
                        <option value=""></option>
                        <option >-10</option>
                        <option >-12</option>
                        <option >-16</option>
                        <option >-18</option>
                    </select><br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="duree">Durée</label>
                </div>
                <div class="col-75">
                    <input type="text" name="duree" id="duree" placeholder="Durée du film..">
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="synopsis">Informations</label>
                </div>
                <div class="col-75">
                    <textarea id="synopsis" name="synopsis" placeholder="Information sur le film.." style="height:100px"></textarea>
                </div>
                </div>


                <div class="row">
                <div class="col-25">
                    <label for="notes">Avis</label>
                </div>
                <div class="col-75">
                    <input type="text" name="notes" id="notes" placeholder="Avis sur le film..">
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="mfil">Images</label>
                </div>
                <div class="col-75">
                    <input type="file" name="mfil" id="mfil" placeholder="Couverture du film..">
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="liba">Lien bande annonce</label>
                </div>
                <div class="col-75">
                    <input type="text" name="liba" id="sary" placeholder="Lien de la bande annonce..">
                </div>
                </div>


                <div class="row">
                
                <div class="col-50" align="center"><input type="submit" name="Enregistrer" value="Enregistrer"></div>
                </div>
            </form>
            </div><br><br>
<!-------------------------------(DEBUT) Script Recherche Genre ------------------------------------>
<script>
    function selgenre(element)
    {
        var idx=element.selectedIndex;
        var val=element.options[idx].value;
        var content=element.options[idx].innerHTML;
        document.getElementById('ikaty').innerHTML = val;
        document.getElementById('katy').innerHTML = content;
        //alert(val + " " + content);
    }
</script>
<!-------------------------------(FIN) Script Recherche Genre ------------------------------------>          
    </body>
    <?php include ('fotera.php'); ?>

</html>


