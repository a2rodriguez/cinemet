<!Doctype html>
<html>
    <head>
    <title>CINEMET - Ajout REALISATEUR</title>
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



            <!---- (DEBUT) Aspect du formulaire ------>
            <style>
                /*.container {
                padding: 16px;
                background-color: white;
                box-sizing: content-box;
                width: 60%;
                }*/
                * {
                box-sizing: border-box;
                
                }

                input[type=text], select, textarea {
                width: 100%;
                padding: 5px; /*12px */
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
                font-size: 13px;
                }

                label {
                padding: 12px 12px 12px 0;
                display: inline-block;
                font-size: 13px;
                }

                input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
                font-size: 13px;
                }

                input[type=submit]:hover {
                background-color: #45a049;
                }

                .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                
                }
                
                .col-25 {
                float: left;
                width: 40%; /* 25%*/
                margin-top: 6px;
                }

                .col-50 {
                float: center;
                width: 70%; /*50%*/
                margin-top: 6px;
                }

                .col-75 {
                float: left;
                width: 100%; /*75%*/
                margin-top: 6px;
                }
                
                /* Clear floats after the columns */
                .row:after {
                content: "";
                display: table;
                clear: both;
                }

                /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
                @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
                }
                </style>

            <!---- (FIN) Aspect du formulaire ------>




    </head>
    <body>
    <?php include ('headera.php'); ?>
    <?php //include ('menu.php'); ?>

        <div class="titre">- AJOUT REALISATEUR -</h2></div>
            
 

<!--======= TENA IZY =========-->
        <div class="fonony"> <!--  container boaty-->
                <!--<form action="r_ajout_film.php" method="POST">-->
                <form action="new_realisateur.php" method="POST">
                <!--<form action="" method="POST">-->
                <div class="row">
                <div class="col-50">
                    <label for="nrealisateur">Nom d réalisateur</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nrealisateur" id="titre" placeholder="Nom du réalisateur..">
                </div>
                </div>


                <div class="row">
                
                <div class="col-50" align="center"><input type="submit" name="Enregistrer" value="Enregistrer"></div>
                </div>
            </form>
            </div><br><br>

          
    </body>
    <?php include ('fotera.php'); ?>

</html>


