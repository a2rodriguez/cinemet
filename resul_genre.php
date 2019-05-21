<!DOCTYPE html>
<html>
<head>
<title>Recherche par genre</title>

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
            <link rel="stylesheet" href="style/styla.css">
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
<body>
<?php include('headera.php');

//<!-- VERSION PDO DEFINTIF -->

  //La fiche du film 
        include ('bdd_connect.php'); 
        $skl = "SELECT * FROM genre WHERE id_genre=".$_POST['i_genre'];
        foreach ($conn->query($skl) as $rows) {
            ?><div class="titre"><?php echo $rows['description']?></div><?php
        }
        $safidy = $rows['description']."<br>";
        
        echo "Genre sélectionné : ".$safidy;

        $sql = $conn -> query("SELECT * FROM films WHERE categorie='".$safidy."'");
        
        ?><div class="lamina"><?php
        while ($row = $sql->fetch()){
        ?>
            <div>
            <div>
                <a href="fiche_film.php?id_film=<?php echo $row['id_film']; ?>">
                    <img src='<?php  echo $row['liphoto']; ?>' height='360' width='280'/>
                </a><br>
            </div>
            <div >
                <a href="fiche_film.php?id_film=<?php echo $row['id_film']; ?>">   
                    <?php echo $row['titre']; ?>
                </a><br>
                  
                </div>
            </div>
         
        <?php }
            $conn=null;
         ?>
         </div>
        <br><br>
        
    <?php  
    
    include ('fotera.php');?>
    </body>
</html>

        


