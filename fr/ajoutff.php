<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Affichage de données</title>
        <script type='text/javascript' src='script/scriptbb.js'></script>
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/form.css">
    </head>

<body>
    <?php include ('headera.php'); ?>
    <div class="titre">- AJOUT FILM -</h2></div>
    <div class="fonony">
    <form action="upload_sary_good.php" method="post" enctype="multipart/form-data">
                
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
                    <div class="col-75">
                        <?php
                            include ('bdd_connect.php');
                            $sql = $conn->query('SELECT * FROM genre ORDER BY description ASC');
                            ?><label for="i_genre"></label>
                            <select name='i_genre' id="i_genre" onchange='selgenre(this)'>
                            <option>«.. Genre ..»</option>
                            <?php                
                            while ($row = $sql->fetch())
                            {
                                echo "<option  value=".$row['id_genre'].">".$row['description']."</option>";
                            }

                            ?></select> <!-- Source : https://www.xul.fr/html5/select.php --->
                            <?php
                            $valgenre = "<span id='ikaty'></span>"; //-- ID récuperé via JS
                            $desgenre = "<span id='katy'></span>"; //-- Description récuperée via JS
                            
                            //echo "<br>"."ID = ".$valgenre." - Genre = ".$desgenre;
                            ?>
                            <!--<input type="hidden" name="i_genre" value="<?php //echo $valgenre; ?>"/><br>
                            <input type="hidden" name="l_genre" value="<?php //echo $desgenre; ?>"/>   -->
                            <?php
                            $sql->closeCursor();
                            $conn = null;

                        ?>
                    </div>

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
<!----- ACTEURS ------->
                <div class="row">
                    <div class="col-25">
                        <label for="i_acteur">Acteurs</label>
                    </div>
                    <div class="col-75">
                        <?php
                            include ('bdd_connect.php');
                            $sqla = $conn->query('SELECT * FROM acteurs ORDER BY designation ASC');
                            ?><label for="i_acteur"></label>
                            <select name='i_acteur' id='i_acteur'>
                            <option>«.. Acteur ..»</option>
                            <?php                
                            while ($row = $sqla->fetch())
                            {
                                echo "<option  value=".$row['id_act'].">".$row['designation']."</option>";
                            }
                            ?></select> 
                            <?php
                                $sqla->closeCursor();
                                $conn = null;
                        ?><br>
                    </div>
                </div> <!---->
<!----- REALISATEURS ------->
                <div class="row">
                    <div class="col-25">
                        <label for="i_real">Réalisateurs</label>
                    </div>
                    <div class="col-75">
                        <?php
                            include ('bdd_connect.php');
                            $sqlr = $conn->query('SELECT * FROM realisateurs ORDER BY nom ASC');
                            ?><label for="i_real"></label>
                            <select name='i_real' id='i_real'>
                            <option>«.. Réalisateur ..»</option>
                            <?php                
                            while ($row = $sqlr->fetch())
                            {
                                echo "<option  value=".$row['id_real'].">".$row['nom']."</option>";
                            }
                            ?></select>
                            <?php
                                $sqlr->closeCursor();
                                $conn = null;
                        ?>
                    </div>
                </div><!---->



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
                        <label for="notes">Avis sur le film</label>
                    </div>
                    <div class="col-75">
                        <!--<input type="text" name="notes" id="notes" placeholder="Avis sur le film..">-->
                        <input type="range" name="notes" min="0" max="10" step=0 value=0 oninput="valora.value=parseInt(notes.value)"/>
                        <output name="valora"> </output>

                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="bannonce">Bande annonce</label>
                    </div>
                    <div class="col-75">
                        <textarea id="bannonce" name="bannonce" placeholder="Bande annonce du film.." style="height:100px"></textarea>
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
        <input type="submit" name="envoyer" value="Enregistrer">
    </form>
</div><br><br><br>
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


<!-------------------------------(DEBUT) Script NOTES RANGE ------------------------------------>
<script>
$(function() {
	$('.range').next().text('--'); // Valeur par défaut
	$('.range').on('input', function() {
		var $set = $(this).val();
		$(this).next().text($set);
	});
});
</script>
<!-------------------------------(FIN) Script NOTES RANGE ------------------------------------>
<?php include ('fotera.php'); ?>
</body>
</html>