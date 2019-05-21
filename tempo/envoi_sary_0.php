<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Affichage de données</title>
        <script type='text/javascript' src='script/scriptbb.js'></script>
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/style.css">
    </head>

<body>
    <div class="container boaty">
    <form action="upload_sary_good.php" method="post" enctype="multipart/form-data">
        
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
                    <label for="l_genre">Catégorie</label>
                </div>

                <?php
                    include ('bdd_connect.php');
                    $sql = $conn->query('SELECT * FROM genre ORDER BY description ASC');
                    ?><label for="i_genre"></label>
                    <select name='i_genre' onchange='selgenre(this)'>
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
                    <!--<input type="hidden" name="i_genre" value="<?php //echo $valgenre; ?>"/><br>
                    <input type="hidden" name="l_genre" value="<?php //echo $desgenre; ?>"/>   -->
                    <?php
                    $sql->closeCursor();

                    $conn = null;

                    ?>



                <!--<div class="col-75">
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
                </div>-->
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
                    <textarea id="synopsis" name="synopsis" placeholder="Information sur le film.." style="height:200px"></textarea>
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
                    <label for="file">Selectionnez le fichier à ENVOYER :</label>
                </div>
                <div class="col-75">
                    <!--<input type="file" name="file">-->
                    <input type="file" name="file" id="sary" placeholder="Couverture du film..">
                </div>
                </div>






<!--
        Selectionnez le fichier à ENVOYER :
        <input type="file" name="file">-->
        <input type="submit" name="envoyer" value="Upload">
    </form>
</div>
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
</html>