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
            <link rel="stylesheet" href="style/reset.css">
            <link rel="stylesheet" href="style/style.css">
<style>
    .container {
        padding: 16px;
        background-color: white;
        box-sizing: content-box;
        /*width: 40%;*/
        width: 100%;
    }
    .box {
        display: flex;
        flex-direction: row;
        align-items: space-around;
        /*height: 200px;*/
        height: 450px;

        }
    .box>*:first-child {
        align-self: stretch;
    }
    .box .selected {
        align-self: center;
    }


/********************(DEBUT) FLEX ********************************/
.lamina{
    display: flex;
	flex-direction: column;
    flex-wrap: wrap;
    
    justify-content: space-around;
    align-items: flex-end;
	/*align-items: space-between;
    align-content: stretch;*/

    width: 50%;
}

.lamina div{
    width: 25%;
}

/*********************(FIN) FLEX *******************************/
        </style>

<?php include ("headera.php"); ?>
<!-- VERSION PDO DEFINTIF -->
<?php
  //La fiche du film 
        include ('bdd_connect.php'); 
        $sql = "SELECT * FROM films WHERE id_film=".$_GET['id_film'];
        foreach  ($conn->query($sql) as $row) {
            ?>
            
                <div class="titre">- <?php echo $row['titre']; ?> -</div>
                    <div class="boaty">
                        <div class="lamina">
                                <div>
                                    <div>  
                                        <img src='<?php  echo $row['liphoto']; ?>' height='360' width='280'/><br>
                                    </div class="container boaty">

                                    <u> Catégorie </u>: <?php echo $row['categorie']; ?><br>
                                    <u> Durée </u>:<?php echo $row['duree']; ?><br>
                                    <u> Synopsys </u>: <?php echo $row['infos']; ?><br>
                                    <u> Avis </u>: <?php echo $row['avis']; ?><br>
                                    <u> Catégorie CSA </u>: <?php echo $row['cat_csa'];?><br><br><br>
                                </div>
                    <div align="right">
                        <iframe width="560" height="315" src="<?php echo $row['bandeannonce']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br><br>
                    </div> 

                    </div>
                    
                </div><br><br>
        
    <?php  } $conn=null; include('fotera.php');?>
        


