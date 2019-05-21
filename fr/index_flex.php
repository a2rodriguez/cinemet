<!DOCTYPE html>
<html>
    <head>
        <title>CINEMET</title>
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

            <script src="script/parallax.js"></script>
            <style>
                .parallax {
                    /* The image used */
                    background-image: url("images/topcinema.jpg");

                    /* Set a specific height */
                    height: 500px;

                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                
            </style>
            <script>
                $(document).ready(function()
                    {
                    function skrollrInit()
                    {
                        skrollr.init({forceHeight: false, mobileCheck: function() { return false; }, smoothScrolling: false});
                    }
                    skrollrInit();
                    $("a[data-rel='gallery']").attr('rel', 'gallery');
                    $("#gallery").magnificPopup({delegate:'a', type:'image', gallery: {enabled: true, navigateByImgClick: true}});
                    });
            
            
            </script>
            <style>
                .roww {
                display: flex;
                
                }

                .column {
                flex: 30%;
                text-align: justify;
                columns: 2 100px; 
                column-rule: 2px solid;
                }
            </style>

    </head>
    <body>
        <?php include ("header.php"); ?>


<!-- -->
<div class="container-fluid">

  <!------->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/film1.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="images/film2.jpg" alt="Chicago" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/film7.jpg" alt="New york" style="width:100%;">
        </div>

      </div>



  </div>



<!-- -->

        <div class='titre'>- A L'AFFICHE -</div>
        <div class="container-fluid text-center my-3">
            
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item row no-gutters active">
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm1.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm2.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm3.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm4.png"></div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm5.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm6.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm7.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm8.png"></div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm9.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm10.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm11.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="images/kfilm12.png"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>

        
        <div class="parallax"></div>
        <!--<div class="parallax-window" data-parallax="scroll" data-image-src="images/topcinema.jpg"></div>-->
        <div class="text-center container-fluid mx-auto " style="font-family:Arial;font-size:14px;">
        <div class="titre1">Origines du cinéma</div><br>
        <div class="roww">
            <div class="column">
                Le cinéma naît à la fin du XIXe siècle. Si l'animation remonte au moins au XVIIe siècle, avec « la lanterne magique », il faut attendre 1891 pour voir apparaître le premier brevet portant sur l'animation d'images photographiques et la fabrication réussie d'une première caméra argentique. Le spectacle collectif qui pourra en résulter prend naissance quelques années plus tard.
                <br>
                Dans de nombreux articles et livres, on peut lire encore aujourd'hui, et plus spécialement en France, que « les inventeurs du cinéma sont les frères Lumière »1. Ils ont mis au point et fait construire une machine permettant d'enregistrer et de projeter en public des vues photographiques en mouvement, qu'ils ont baptisée le Cinématographe. À l'époque, la presse, invitée aux premières projections Lumière, parle, non pas du Cinématographe, mais du « Kinétoscope (ou du Kinétographe) des frères Lumière »2. Le 22 décembre 1895, quand Auguste et Louis Lumière présentent leur invention aux savants de la Société d'encouragement, ils nomment encore « Kinetoscope de projection »3 ou Kinétographe Lumière leurs appareils de prise de vues et de visionnement. L'appareil de prise de vues, inventé par Thomas Edison et son principal collaborateur, William Kennedy Laurie Dickson en 1891, le Kinétographe, la première caméra, et l'appareil permettant de voir individuellement les films, le Kinétoscope, sont cités en références, preuve de leur antériorité. L'invention des frères Lumière, ou plus exactement celle de Louis Lumière et de son ingénieur, Jules Carpentier, est à la fois une caméra et un projecteur (et même une tireuse de copies), ce qui va séduire les amateurs fortunés. De plus, avec la possibilité de voir des vues photographiques animées sur grand écran, les frères Lumière lancent le spectacle de cinéma. Cette invention, qui en améliore d'autres, plus rudimentaires, apparaît immédiatement comme un concurrent fatal aux spectacles animés préexistants.
                <br>
                En français, l'apocope de la marque déposée Cinématographe, le cinéma, va s'imposer dans le langage courant en quelques années. Mais dans les autres pays, ce sont les moving pictures, les movies, et aussi le Kino. L'Encyclopédie Larousse affirme : « Ce retentissement mondial conduira de nombreux historiens à considérer le 28 décembre 1895 comme la date de naissance du cinéma4 ». Elle évoque la projection que les frères Lumière organisèrent à Paris, pour le grand public, dans le Salon indien du Grand Café, au no 14 du boulevard des Capucines, mais ce n'était pas la première fois que des vues photographiques animées, selon les propres termes de Louis Lumière5, étaient montrées en public. Certes, le succès des projections du Grand Café donne un nouveau départ à l'exploitation des films, telle qu'Edison la pratiquait encore en 1895, explique avec humour Édouard Waintrop, critique de cinéma et délégué général de la Quinzaine des réalisateurs au Festival de Cannes. « Alors que monsieur Edison a mis au point une petite boîte avec un éclairage très faible, qui permet à seulement une ou deux personnes isolées d'expérimenter ce phénomène d'images animées, les Lumière ont choisi un système qui permet de faire partager l'expérience à toute une assemblée6 ». Faire des deux inventeurs les pères du cinéma est pourtant abusif. En faire les initiateurs des projections animées sur grand écran ne l'est pas moins, puisque c'est leur compatriote Émile Reynaud qui, le premier, en octobre 1892, organisa devant une assemblée publique payante les premières projections animées sur grand écran des premiers dessins animés (l'animation fait partie du cinéma). Les frères Lumière eux-mêmes n’en revendiquaient pas autant et corrigeaient l'affirmation qui faisait d'eux les seuls inventeurs du cinéma, ainsi que le rapporte Maurice Trarieux-Lumière, petit-fils de Louis Lumière et président de l'Association Frères Lumière : « Mon grand-père a toujours reconnu avec une parfaite probité, j'en porte témoignage, les apports de Janssen, Muybridge et Marey, inventeurs de la chronophotographie, Reynaud, Edison et surtout Dickson7 ».
                <br>
                Construire la machine appelée « le Cinématographe » ne revient donc pas à inventer ce qui est au cœur du 7e Art, son essence même, les films (d'après Dickson, c'est Edison qui, le premier, adopta le mot anglais film, qui désigne un voile, une couche, aux œuvres de cinéma, en référence à l'émulsion photosensible couchée sur une face du support). Pas de films, pas de cinéma ! Et le couple Edison-Dickson est bien à l'origine des premiers films du cinéma, ainsi que l'affirme Laurent Mannoni, conservateur à la Cinémathèque française des appareils du précinéma et du cinéma : les premiers films ont été enregistrés par le « Kinétographe (en grec, écriture du mouvement) : caméra de l’Américain Thomas Edison, brevetée le 24 août 1891, employant du film perforé 35 mm et un système d’avance intermittente de la pellicule par "roue à rochet". Entre 1891 et 1895, Edison réalise quelque soixante-dix films8 ». Toutefois, toujours pour Laurent Mannoni, « le cinéma n'[est] pas apparu miraculeusement en 1895 », et « l'industrie des "photographies mouvementées" a pu éclore, dans les années 1890, grâce à des usages et des pratiques établis depuis des siècles ».
                <br>
            </div>

           <!-- <div class="column">
                Les quatre étapes fondamentales de l'invention du cinéma, donc de ce qui fait l'objet même de la création cinématographique : les films, si l'on excepte l'invention de la gélatine argentique10, une émulsion gélatineuse - faite à partir d'éléments d'origine animale - contenant une suspension de cristaux de bromure d'argent, fondement de la photographie argentique, qui concerne en premier chef la photographie, peuvent se classer chronologiquement ainsi :
                <br>
                    1888 : l'Américain John Carbutt invente un support souple et transparent, en nitrate de cellulose, le celluloïd, en bandes de 70 mm de large commercialisées par l'industriel George Eastman11.
                    1891 : l'Américain Thomas Edison, secondé par William Kennedy Laurie Dickson et William Heise, conçoit le film 35 mm à défilement vertical, à 2 jeux de 4 perforations rectangulaires par photogramme, tel que nous le connaissons encore de nos jours (après un bref passage au format 19 mm à défilement horizontal). Les deux hommes mettent au point le Kinétographe, appareil de prises de vues, et le Kinétoscope, appareil de visionnement individuel12. Ils enregistrent les premiers films du cinéma, et peuvent les montrer en mouvement au public grâce au Kinétoscope.
                    1892 : le Français Émile Reynaud conçoit le premier dessin animé du cinéma, qu'il dessine directement sur une bande souple perforée de 70 mm de longueur indéfinie (faite de multiples carrés de gélatine, renforcée par de la gomme-laque et de fins ressorts), à défilement horizontal. Il entreprend, à l'aide d'une machine de sa conception, le Théâtre optique, les premières projections publiques d'images en mouvement sur grand écran13. Il commande la première musique originale composée exprès pour un film14, trois ans avant les projections des frères Lumière.
                    1895 : les Bisontins Louis et Auguste Lumière, plus connus sous l'appellation des frères Lumière, synthétisant les découvertes de leurs prédécesseurs, conçoivent à Lyon le Cinématographe, un appareil capable d'enregistrer des images photographiques en mouvement sur un film Eastman de 35 mm de large à 2 jeux de 2 perforations rondes par photogramme (dispositif abandonné depuis), et de les restituer en projection. Ils organisent les premières projections publiques payantes d'images photographiques en mouvement sur grand écran15, ou du moins celles qui provoquent le plus grand retentissement mondial, car avant elles, d'autres projections du même type ont eu lieu, à Berlin (Max Skladanowsky et son frère Eugen, avec leur Bioskop) et à New York (Woodville Latham avec son Panoptikon).
                <br><br>
            </div>-->
        </div> 
        



        </div>
        


        <div class='titre'>- ALLO CINEMET -</div>
        
        <?php //include ("footer.php"); ?>
<div class="row">
    <div class="col-md-6">
        
        <img src="images/havia.jpg" id="imazy">
    </div>
    <div class="col-md-6" align="left">
        
        <h1><span style="color:grey, align:center;">Cinéma selon Wikipédia</span></h1><br>
        <span style="color:#969696;font-family:Arial;font-size:15px;">Le cinéma est un art du spectacle. En français, il est couramment désigné comme le « septième art », d'après l'expression du critique Ricciotto Canudo dans les années 1920. L’art cinématographique se caractérise par le spectacle proposé au public sous la forme d’un film, c’est-à-dire d’un récit (fictionnel ou documentaire), véhiculé par un support (pellicule souple, bande magnétique, contenant numérique) qui est enregistré puis lu par un mécanisme continu ou intermittent qui crée l’illusion d’images en mouvement, ou par un enregistrement et une lecture continus de données informatiques....</span>
                            
    </div>


</div>
<!--<?php //include('footer.php');?>-->

<!-- (DEBUT) FOOTER -->
<div class="row" style="background-color: lightgray;">
    <div class="col-md-4">
        <div>
            <span style="background-color:#FFF;font-family:Arial;font-size:18px;"><strong>MENU</strong></span><br>
        </div>
        <div align="left">
            <ul style="font-size: 13px;">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="content0.php">Content</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div align="center">
            <!--<span style="backgroud-color:#FFF;font-family:Arial;font-size:19px;"><strong>ADRESSE</strong></span><br>-->
            <span style="background-color:#FFF;font-family:Arial;font-size:18px;"><strong>ADRESSE</strong></span><br>
            <ul style="font-size: 13px;">
                <li>28 Avenue Georges Corneau</li>
                <li>08004 CHARLEVILLE-MEZIERES</li>
                <li>Tél : 03.24.56.62.66</li>
                <li>Email: simplon@ardennes.cci.fr</li>

            </ul>
            
        
        </div>
    </div>

    <div class="col-md-4">
        <div>
            <span style="background-color:#FFF;font-family:Arial;font-size:18px;"><strong>RESEAUX SOCIAUX</strong></span>
        </div>
        <div id="wb_FontAwesomeIcon1" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:13;">
            <a href="#"><div id="FontAwesomeIcon1"><i class="fa fa-facebook"></i></div></a>
        </div>
        <div id="wb_FontAwesomeIcon2" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:14;">
            <a href="#"><div id="FontAwesomeIcon2"><i class="fa fa-twitter"></i></div></a>
        </div>
        <div id="wb_FontAwesomeIcon3" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:15;">
            <a href="#"><div id="FontAwesomeIcon3"><i class="fa fa-pinterest"></i></div></a>
        </div>
        <div id="wb_FontAwesomeIcon4" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:16;">
            <a href="#"><div id="FontAwesomeIcon4"><i class="fa fa-instagram"></i></div></a>
        </div>
        <div id="wb_FontAwesomeIcon5" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:17;">
            <a href="#"><div id="FontAwesomeIcon5"><i class="fa fa-youtube"></i></div></a>
        </div>
        </div>
       
     </div>
    
    <div align="center">
        <span style="color:#0C0C0C0; font-family:Arial; font-size:13px;">Copyright ©2019 CINEMET</span>
    </div>
    
<!-- (FIN) FOOTER -->

    </body>
</html>