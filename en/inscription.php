<!DOCTYPE html>
<html>
<head>
    <title>Subscription</title>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">-->
    <link rel="stylesheet" href="../connexion.css">
    <link rel="stylesheet" href="../style/form.css">
    <!--
    <style>
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
-->
</head>
<body>
  <?php include('headera.php'); ?>
  <div class="titre">- USER ACCOUNT -</h2></div>

  <div class="fonony">
        <form action="ajout_utilisateur.php" method="POST">
            <!--<div class="container boaty">-->
                
                <p>Fill the form for subscription.</p>
                

                <label for="nom"><b>Surname</b></label>
                <input type="text" placeholder="Enter yout surname .." name="nom"><br>

                <label for="prenom"><b>First name</b></label>
                <input type="text" placeholder="Enter your first name .." name="prenom"><br>

                <label for="email"><b>Email address</b></label>
                <input type="text" placeholder="Enter your mail address" name="email" required><br>

                <label for="ulogin"><b>Login</b></label>
                <input type="text" placeholder="Enter your login .." name="ulogin" required><br>
                <div class="col-50">
                    <label for="psw1"><b>Password</b></label>
                </div>
                <div class="col-75">
                    <input type="password" placeholder="Enter your password .." name="psw1" required><br>
                </div>

                <div class="col-50">
                    <label for="psw2"><b>Password verification</b></label>
                </div>
                <div class="col-75">
                    <input type="password" placeholder="Password verfification .." name="psw2" required><br>
                </div>

                <button type="submit" class="registerbtn" name="envoyer">Register</button><br><br>
                
            <!--</div>-->
            <br><br>
            <!--<div class="container signin">-->
            <div class="container">
                    <p>Existing account? <a href="login_user.php">Connexion </a>.</p>
            </div>
            <!--<button type="submit" class="registerbtn" name="envoyer">Enregistrer</button>--><br><br>
            
            
            </form>
        </div><br><br>

    <?php include('fotera.php'); ?>
</body>
</html>
