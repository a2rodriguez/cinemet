<!DOCTYPE html>
<html>
    <head>
        <title>CINEMET</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <link href="font-awesome.min.css" rel="stylesheet">
            <!--<link href="content.css" rel="stylesheet">
            <link href="index.css" rel="stylesheet">-->
            <script src="jquery-1.12.4.min.js"></script>
            <!--<script src="skrollr.min.js"></script>
            <script src="scrollspy.min.js"></script>-->

            <!--<link rel="stylesheet" href="magnificpopup/magnific-popup.css">-->
            <link rel="stylesheet" href="../style/reset.css">
            <link rel="stylesheet" href="../style/style.css">
            <link rel="stylesheet" href="../style/styla.css">
            <link rel="stylesheet" href="../style/footer.css">

            <script src="magnificpopup/jquery.magnific-popup.min.js"></script>

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


            <script rel="text/javascript" src="../script/app.js"></script>
            <link rel="stylesheet" href="css/animate.css">
            <!-----*** FIN *** ITY ILAY AVY TARY @ ILAY METY ------->

            <script rel="text/javascript" src="../script/script.js"></script>
            <!--- (DEBUT) MENU ICONE----->
            
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <!--- (FIN) MENU ICONE----->

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="../style/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

            <script src="script/parallax.js"></script>
            <style>
                .parallax {
                    /* The image used */
                    background-image: url("../images/topcinema.jpg");

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
                .roww1 {
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
        <?php include ("headera.php"); ?>


<!-- -->
<div class="container-fluid">

  <!------->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="../images/film1.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="../images/film2.jpg" alt="Chicago" style="width:100%;">
        </div>
        <div class="item">
          <img src="../images/film7.jpg" alt="New york" style="width:100%;">
        </div>

      </div>



  </div>



<!-- -->

        <div class='titre'>- ON DISPLAY -</div>
        <div class="container-fluid text-center my-3">
            
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item row no-gutters active">
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm1.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm2.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm3.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm4.png"></div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm5.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm6.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm7.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm8.png"></div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm9.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm10.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm11.png"></div>
                        <div class="col-3 float-left"><img class="img-fluid" src="../images/kfilm12.png"></div>
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
        <div class="titre1">Cinematography</div><br>
        <div class="roww1">
            <div class="column">
            Cinematography (from ancient greek κίνημα, kìnema "movement" and γράφειν, gràphein "to write") is the science or art of motion-picture photography by recording light or other electromagnetic radiation, either electronically by means of an image sensor, or chemically by means of a light-sensitive material such as film stock.[1]

<br>Cinematographers use a lens to focus reflected light from objects into a real image that is transferred to some image sensor or light-sensitive material inside a movie camera. These exposures are created sequentially and preserved for later processing and viewing as a motion picture. Capturing images with an electronic image sensor produces an electrical charge for each pixel in the image, which is electronically processed and stored in a video file for subsequent processing or display. Images captured with photographic emulsion result in a series of invisible latent images on the film stock, which are chemically "developed" into a visible image. The images on the film stock are projected for viewing the motion picture.

<br>Cinematography finds uses in many fields of science and business as well as for entertainment purposes and mass communication. 


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
        
        
<div class="row">
    <div class="col-md-6">
        
        <img src="../images/havia.jpg" id="imazy">
    </div>
    <div class="col-md-6" align="left">
        
        <h1><span style="color:grey, align:center;">Digital cinematography</span></h1><br>
        <span style="color:#969696;font-family:Arial;font-size:15px;">
        In digital cinematography, the movie is shot on digital medium such as flash storage, as well as distributed through a digital medium such as a hard drive.

Beginning in the late 1980s, Sony began marketing the concept of "electronic cinematography," utilizing its analog Sony HDVS professional video cameras. The effort met with very little success. However, this led to one of the earliest digitally shot feature movies, Julia and Julia (1987).[16] In 1998, with the introduction of HDCAM recorders and 1920 × 1080 pixel digital professional video cameras based on CCD technology, the idea, now re-branded as "digital cinematography," began to gain traction</span>
                            
    </div>
   
</div>
<?php include ('fotera.php');?>
    </body>
</html>