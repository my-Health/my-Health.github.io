<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
        <link href="../../css/inscription.css" rel="stylesheet" type="text/css">
        <script src="jquery.js"></script>
    </head>
    
    <body>
    	<?php include("Include/header.php") ?>
	    <?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php");
        ?>
        <article>

            	<ul>
                	<li>Votre pseudo</li>
                    <div class="rouge">
                    <label>Choisissez votre pseudo :</label> 
                    <input type="text" name="pseudo" id="pseudo"/> 
                    <br/>
                    </div>
                    <li>Vos informations</li>
                    <div class="rouge">
                        <label for="">Sexe</label>
                        <input type="radio" name="sexe" value="homme" id="sexe" checked/> Homme
                        <input type="radio" name="sexe" id="femme" id="sexe" value="femme"/> Femme
                        <br/>
                        <label for="">Prénom</label>
                        <input type="text" name = "prenom" id="prenom"/>
                        <br/>
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="nom"/>
                        <br/>
                        <label for="">adresse email</label>
                        <input type="email" name="mail" id="email"/>
                        <br/>
                        <label for="" >Mot de passe</label>
                        <input type="password" name="password" id="pass1" />
                        <br/>
                        <label for="" >Confirmation mot de passe</label>
                        <input type="password" name="passwordConf" id="pass2"/>
                        <br/>
                        <label for="">Date de naissance</label>
                        <input type="number" class="date" name="jour" max="31" min="1" id="jour">
                        <select class="form-control" id="sel1" name="mois" id="mois">
                            <option value="01">Janvier</option>
                            <option>Fevrier</option>
                            <option>Mars</option>
                            <option>Avril</option>
                            <option>Mai</option>
                            <option value="06">Juin</option>
                            <option>Juillet</option>
                            <option>Aout</option>
                            <option>Septembre</option>
                            <option>Octobre</option>
                            <option>Novembre</option>
                            <option>Decembvre</option>
                        </select>
                        <input type="number" class="date" name="annee" max="2016" min="1900" id="dateNaiss"/>
                        <br/>
                    </div>
                	    <li>Vos activités</li>
                	    <div class="rouge">
                         <input type="radio" name="sport" value="Oui" Checked id="sport"/>  Vous êtes plutôt actif 
                	       <input type="radio" name="sport" id="sport" value="Non"/> Vous êtes plutôt bureau, voiture et rarement de sport<br/>
                	    </div>
                	  <input type="submit" value="Enregistrer" id="submit"/>  
                </ul>
                 <div id="result"></div>
        </article>
        <script>
            $(document).ready(function(){
               $("#submit").click(function(){
                    var user_pseudo = $("#pseudo").val();
                    var user_sexe = $("#sexe").val();
                    var user_prenom = $("#prenom").val();
                    var user_nom = $("#nom").val();
                    var user_email = $("#email").val();
                    var user_pass1 =$("#pass1").val();
                    var user_pass2 = $("#pass2").val();
                    var user_naissance = $("#dateNaiss").val();
                    var user_activite = $("#sport").val();
                    $.ajax({
                        url: "PHPinscription.php",
                        data: {pseudo:user_pseudo,sexe:user_sexe,prenom:user_prenom,nom:user_nom,email:user_email,pass1 : user_pass1,pass2:user_pass2, naissance : user_naissance,activite:user_activite},
                        type: "POST",
                        success: function(data){
                            $("#result").html(data);
                        }
                   });
               }) ;
            });

        </script>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
    </body>
</html>
