<link rel="stylesheet" href="../style/styla.css">
<link rel="stylesheet" href="../style/header.css">

<!-----------------------(FIN) MENU topnavee ---------------------------------->
<div class="topnavee" id="mytopnavee">
    <a href="../index.php">Accueil</a>
    <a href="lesfilms.php">Films</a>
    <a href="recherche.php">Recherche</a>
    
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div><br>
<div align="center">
  <div><a href="index.php"><img src="../images/fr_kely.gif"></a>    <a href="../en/index.php"><img src="../images/en_kely.gif"></a></div>
</div>
<!-----------------------(FIN) MENU topnavee ---------------------------------->

<!-----------------------(DEBUT) MYFONCTION ---------------------------------->
<script>
function myFunction() {
  var x = document.getElementById("mytopnavee");
  if (x.className === "topnavee") {
    x.className += " responsive";
  } else {
    x.className = "topnavee";
  }
}
</script>
<!-----------------------(FIN) MYFONCTION ---------------------------------->