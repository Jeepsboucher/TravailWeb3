
   <?php 
    session_start(); 

    if(isset($_SESSION['echecinscription'])){
            echo 'session : ' . $_SESSION['echecinscription'];
        if($_SESSION['echecinscription'] == 1)
        {
            require 'popupErreur.js';
        }
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/Design.css" type="text/css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<title>Page de login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--<![endif]-->

    <style>
        html, body, form {height:100%;width:100%;}
        * { font-family: proxima-nova, monospace; }
        #titre { font-size:500%;color:white;font-weight: bold; margin: 0;}
        #sousTitre { font-style: italic;font-size:300%;color:white;margin:10px; }
        #infos { font-size:100%;color:white; }
        
        
    </style>
    <script lang="javascript">
    function FNConnection(){
        document.getElementById('InfoInscription').style.display = 'none';
        document.getElementById('InfoConnexion').style.display = '';
    }
    function FNInscription(){
        document.getElementById('InfoInscription').style.display = '';
        document.getElementById('InfoConnexion').style.display = 'none';
    }
    </script>
</head>
<body background="Images/lake.jpg" style="background-repeat:no-repeat;background-size:cover;">
    <form name="Connexion" method="POST" action="index.php">
        <div>
            <div class="pure-u-1 pure-u-md-3-3 pure-u-lg-5-5">
            </div>
            <br><br><br><br><br>
            <div class="pure-u-1 pure-u-md-17-24 pure-u-lg-17-24 form-box" style="display:inline-block;">
                <center>
                    <h1 id="titre" class="pure-u-1 pure-u-md-3-3 pure-u-lg-5-5">Toutes les photographies</h1>
                    <h3 id="sousTitre" class="pure-u-1 pure-u-md-3-3 pure-u-lg-5-5">réunies en un seul endroit</h3>
                    <br><br>
                    <p id="infos" style="font-size:25px;" class="pure-u-1 pure-u-md-3-3 pure-u-lg-5-5">
                        Plateforme de partage de photographies intégré dans une communatué vibrante. <br>
                        Rejoignez dès maintenant pour accéder aux multiples ajouts des utilisagers retrouvés mondialement.
                    </p>
                </center>
            </div>
            <div class="pure-u-1 pure-u-md-6-24 pure-u-lg-6-24" style="display:inline-block;">
                <center>
                   <div onclick="FNInscription()">
                        <section class="portfolio-experiment" style="display:inline-block;">
                            <a>
                                <span class="text">Inscription</span>
                                <span class="line -right"></span>
                                <span class="line -top"></span>
                                <span class="line -left"></span>
                                <span class="line -bottom"></span>
                            </a>
                        </section> 
                    </div>
                    <br><br>
                    <div onclick="FNConnection()">
                        <section class="portfolio-experiment" style="display:inline-block;">
                            <a>
                                <span class="text">Connexion</span>
                                <span class="line -right"></span>
                                <span class="line -top"></span>
                                <span class="line -left"></span>
                                <span class="line -bottom"></span>
                            </a>
                        </section>
                    </div>
                    <br><br><br><br><br>
                    
                    <div style="background-color:white;opacity:0.8;" class="pure-u-1 pure-u-md-1-3 pure-u-lg-3-5">
                        <form class="pure-form">
                            <div id="InfoInscription" style="display:none;">
                              <br>
                              <label class="pure-input-1-2">   Inscription   </label>
                               <br><br><br>
                              <label class="pure-input-1-2" for="nomCompletIns">Nom complet: </label>
                               <input type="text" class="pure-input-1-2" id="nomCompletIns" name="nomCompletIns"/>
                               <br><br>
                               <label class="pure-input-1-2" for="nomUtilisateurIns">Nom d'utilisateur: </label>
                               <input type="text" class="pure-input-1-2" id="nomUtilisateurIns" name="nomUtilisateurIns"/>
                               <br><br>
                               <label class="pure-input-1-2" for="motDePasseIns">Mot de passe: </label>
                               <input type="text" class="pure-input-1-2" id="motDePasseIns" name="motDePasseIns"/>
                               <br><br>
                               <label class="pure-input-1-2" for="courrielIns">Courriel: </label>
                               <input type="text" class="pure-input-1-2" id="courrielIns" name="courrielIns"/>
                               <br><br><br>
                               <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">S'inscrire</button>
                               <br><br>
                            </div>
                            
                            <div id="InfoConnexion" style="display:;">
                              <br>
                              <label class="pure-input-1-2">   Connexion   </label>
                               <br><br><br>
                               <label class="pure-input-1-2" for="nomUtilisateur">Nom d'utilisateur: </label>
                               <input type="text" class="pure-input-1-2" id="nomUtilisateur" name="nomUtilisateur"/>
                               <br><br>
                               <label class="pure-input-1-2" for="motDePasse">Mot de passe: </label>
                               <input type="text" class="pure-input-1-2" id="motDePasse" name="motDePasse"/>
                               <br><br><br>
                               <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Se sonnecter</button>
                               <br><br>
                            </div>
                            
                        </form>
                    </div>
                </center>
            </div>
                  <!-- <input type="submit" name="Submit" value="Connexion" class=""> 
                   <input type="submit" name="Submit" value="Inscription" class="">-->
            <!--</div>
            <div class="pure-u-1" style="background-color:white;position:fixed;bottom:0;width:100%;height:35px;" align="right">

              <a href="https://www.facebook.com/"><img src="images/Facebook.png" height="25" width="25"></a>
              <a href="https://www.instagram.com/"><img src="images/Instagram.png" height="25" width="25"></a>
              <a href="https://twitter.com/"><img src="images/Twitter.png" height="25" width="25"></a>
            </div>-->
        </div>
    </form>
<?php 
    session_destroy(); 
    session_unset(); 
?>
</body>
</html> 