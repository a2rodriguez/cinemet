<!Doctype html>
<html>
    <head>
    <title>CINEMET - Ajout GENRE</title>
            <meta charset="UTF-8">
            <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <!--<meta name="generator" content="WYSIWYG Web Builder 14 - http://www.wysiwygwebbuilder.com"> -->
            
            <link href="font-awesome.min.css" rel="stylesheet">
            <!--<link href="content.css" rel="stylesheet">
            <link href="index.css" rel="stylesheet">-->
            <script src="jquery-1.12.4.min.js"></script>
            <!--<script src="skrollr.min.js"></script>
            <script src="scrollspy.min.js"></script>-->

            <!--<link rel="stylesheet" href="magnificpopup/magnific-popup.css">-->
            <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/form.css">


            <!--<script src="magnificpopup/jquery.magnific-popup.min.js"></script>-->

            <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <!-- link (FIN) BOOSTRAP 4.3.1 -->



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


        <div class="titre">- UPDATE GENRE -</h2></div>

        <div class="fonony"> 
                
                
                
                <form action="new_genre.php" method="POST">
                
                <div class="row">
                            <?php
                                include ('bdd_connect.php');
                                $id = $_GET['mdfu'];
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
                                
                                
                                $sql->closeCursor();
                                $conn = null;
                                ?>
                               
                <div class="col-50">
                    <label for="ngenre">Genre de film</label>
                </div>
                    
                <div class="col-75">
                    <input type="text" name="im_genre" value="<?php echo $_GET['mdfu'];?>">
                    <input type="text" name="_genre" value="<?php echo $row['description'];?>">
                </div>
                </div>


                <div class="row">
                
                <div class="col-50" align="center"><input type="submit" name="Enregistrer" value="Enregistrer"></div>
                </div>
            </form>
            </div><br><br>

          
    </body>
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
    <?php include ('fotera.php'); ?>

</html>


