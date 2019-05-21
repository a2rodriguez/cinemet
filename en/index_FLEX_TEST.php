<!doctype html>
<html>
    <head>
        <title>ACCUEIL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="style/reset.css">-->
        <!--<link rel="stylesheet" href="style/header.css">-->
        <!--<link rel="stylesheet" href="style/footer.css">-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Source : https://la-cascade.io/flexbox-guide-complet/ 
        https://www.damienflandrin.fr/blog/post/tutoriel-realiser-un-menu-responsive-avec-flexbox
        https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox

		-->
        <style>
        .kontenera{
            display: flex;
            padding: 5px;
            
            /*background-color: transparent;*/
            list-style: none;
            justify-content: space-around;
            
            color: #304D63;
            font-family: campanileflf;
            font-size:5vw;
            /*text-decoration: underline overline;*/
            text-decoration: none;
            border: 2px 2px solid blue;
            /*text-shadow: 1px 2px rgb(51, 50, 50);*/
            border : 2px dotted;
            border-radius: 5px;
            box-shadow: 3px 2px 0;
            background-color: #789CFF;
        }

        .elemanta{
            margin: auto;
        }

        @font-face {
            font-family: campanileflf;
            src: url(fonts/campanileflf.ttf);
        }

        @font-face {
            font-family: charposh;
            src: url(fonts/charposh.ttf);
        }

        .titre{
        font-family: charposh;
        font-size:7vw;
        text-align: center;
        } 

        /***************************** (DEBUT) FLEX METY *******************************************/        
        .kesika{
            
            background-color: rgb(182, 182, 190);
        }

        .fonony{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            padding: 25px;
            border: 2px solid;
            border-radius: 10px;
            box-shadow: 3px 2px 0;
            width: 80%;
            margin: auto;
            /*justify-content: space-between;*/

            justify-content: center;
            align-items: center;
            
        }
        .anatiny{
            padding: 10px;
            margin: auto;
            align-items: center;
            border: 2px solid red;
        }
        .ambany{
            display: flex;
            padding: 10px;
            border-radius: 10px;
            align-self: flex-end;
        }
        /***************************** (FIN) FLEX METY *******************************************/
        @font-face {
            font-family: charposh;
            src: url(fonts/charposh.ttf);
        }

        .titre{
        font-family: charposh;
        font-size:7vw;
        text-align: center;
        } 

        </style>
    </head>
<body>
    <?php 
    
    include ('headera.php')?>
    <div class="kesika">
            <div class="titre">LOHATENY</div>
                <div class="fonony">
                    <div class="anatiny">
                        <h3>SORATRA VOALOHANY</h3>
                    </div>
                    <div class="anatiny">
                        <h3>SORATRA FAHAROA</h3>
                    </div>
                    <div class="anatiny">
                        <h3>SORATRA FAHATELO</h3>
                        </div>
                    <br><br>
                    <div class="ambany">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/oKStYmMgNRA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div><br><br>
    </div>
    <?php include ('fotera.php');?>
</body>
</html>

