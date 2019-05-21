<link rel="stylesheet" href="style/footer.css">
<style>


/*
    .fononyf{
        display: flex;
    }
    .anatinyf{
        margin:auto;
    }
*/
/********************************** (DEBUT) 3 COLONNES **********************************************/
    body{
            padding: 0;
            margin: 0;
            font-family: Verdana;
        }
    .roww {
        display: flex;
        padding: 25px;
        border : 2px dotted;
        border-radius: 5px;
        box-shadow: 3px 2px 0;
        height: 100%;                
        /*background-color: #789CFF;*/
        background-color: #E5D3BE;
        /* #A0A7E5; Manga tanora*/
        /*#717171;*/
        /*#E5C3D9; /* Mavokely*/
    }

    .mifindra{
        /*break-after: column;*/
        break-after: column;
        break-before: column;
        text-align: center;
        align-items: center;
    }

    .kolona li{
        list-style: none;
        text-align: center;
    }
    .kolona {
        flex-direction: row wrap;
        flex: 34%;
        text-align: center;
        columns: 3 100px; 
        column-rule: 2px dotted;
        
        font-family: Arial;
        font-size: 13px;
        text-align: center;
    }
    @media screen and (max-width: 600px){
        .kolona{
            display: flex;
            flex-direction: column;
            font-family: Arial;
        }
        .kolona li{
            list-style: none;
            font-family: Arial;
            text-align: center;
        }
/********************************** (FIN) 3 COLONNES **********************************************/

    }
</style>

<div class="roww">
    <div class="kolona">
        <!--COLONNE 1 -->
        <div>
            <span style="font-size:18px;"><b>MENU</b></span><br>
        <!--</div>

        <div>-->
            <ul style="font-size: 13px;">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul><br>
        </div>
    
        <!--COLONNE 2 -->
        <div class="mifindra">
            <!--<span style="backgroud-color:#FFF;font-family:Arial;font-size:19px;"><strong>ADRESSE</strong></span><br>-->
            <span style="font-size:18px;"><strong>ADRESSE</strong></span>
            <ul style="font-size: 13px;">
                <li>28 Avenue Georges Corneau</li>
                <li>08004 CHARLEVILLE-MEZIERES</li>
                <li>0324566266 - simplon@ardennes.cci.fr</li>
            </ul><br>
        </div>

        <!--COLONNE 3 -->
        <div class="mifindra">
            <!--<span style="backgroud-color:#FFF;font-family:Arial;font-size:18px;"><strong>RESEAUX SOCIAUX</strong></span>-->
            <p style="font-family:Arial;font-size:18px;"><strong>RESEAUX SOCIAUX</strong></p><br>

                <!--<i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>-->

                <div id="wb_FontAwesomeIcon1" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:13;">
                    <a href="http://www/facebook.com"><div id="FontAwesomeIcon1"><i class="fab fa-facebook"></i></div></a>
                </div>
                <div id="wb_FontAwesomeIcon2" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:14;">
                    <a href="https://twitter.com/"><div id="FontAwesomeIcon2"><i class="fab fa-twitter"></i></div></a>
                </div>
                <div id="wb_FontAwesomeIcon3" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:15;">
                    <a href="http://www.pinterest.fr/"><div id="FontAwesomeIcon3"><i class="fab fa-pinterest"></i></div></a>
                </div>
                <div id="wb_FontAwesomeIcon4" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:16;">
                    <a href="http://www.instagram.com"><div id="FontAwesomeIcon4"><i class="fab fa-instagram"></i></div></a>
                </div>
                <div id="wb_FontAwesomeIcon5" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:17;">
                    <a href="http://www.youtube.com"><div id="FontAwesomeIcon5"><i class="fab fa-youtube"></i></div></a>
                </div>
        </div>
    </div>
</div>

<div align="center">
        <span style="color:#0C0C0C0; font-size:13px;">Copyright ©2019 CINEMET</span>
</div>
