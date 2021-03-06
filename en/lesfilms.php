<!DOCTYPE html>
<html>
    <head>
        <title>All our movies</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- link (FIN) BOOSTRAP 4.3.1 -->
        <link rel="stylesheet" href="../style/reset.css">
        <link rel="stylesheet" href="../style/styla.css">
        <link rel="stylesheet" href="../style/style.css">
        
        <style>
            .container {
                padding: 16px;
                background-color: white;
                box-sizing: content-box;
                /*width: 40%;*/
                width: 40%;
            }
            .box {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                
                
                /*align-items: flex-start;*/
                align-items: space-between;
                /*height: 200px;*/
                height: 450px;

                }
            .box>*:first-child {
                align-self: stretch;
            }
            .box .selected {
                align-self: center;
            }
/***********************************/
.lamina{
    display: flex;

    flex-wrap: wrap;
    justify-content: space-around;
    align-items: left;

    width:100%;
}

.lamina div{
    width: 22%;
    text-align: center;
}
@media screen and (max-width: 700px){
    .lamina{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
}
/***********************************/
        </style>
    </head>
<body>
    <?php include ('headera.php'); ?>
        <div class="titre">- OUR MOVIES -</h2></div>
    <?php

    //CONNEXION WITH PDO
    include ('bdd_connect.php');


    $sql = ('SELECT * FROM films ORDER BY id_film DESC');
    ?><div class="lamina"><?php
    foreach  ($conn->query($sql) as $row) {
    ?>
        <div>
            <div>
                <a href="fiche_film.php?id_film=<?php echo $row['id_film']; ?>">
                    <img src='../<?php  echo $row['liphoto']; ?>' height='360' width='280'/>
                </a><br>
            </div>
            <div>
            <a href="fiche_film.php?id_film=<?php echo $row['id_film']; ?>">   
                <?php echo $row['titre']; ?>
            </a><br>
              
            </div>
        </div>
    
        
    <?php }
        $conn=null;
     ?>
     </div>
     
     

    <?php include ('fotera.php'); ?>
    </body>
</html>


