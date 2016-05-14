<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="icon" href="../../image/lo-go.png"/>
        <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
        <link href="../../css/inscription.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../css/datepicker.min.css"/>
        <link rel="stylesheet" href="../../css/datepicker3.min.css"/>
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/bootstrap-datepicker.min.js"></script>
        <script src="../../js/dateNaiss.js"></script>
        <!-- favicon -->
    </head>
    
    <body>
    	<?php include("Include/header.php") ?>
	    <?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php");
        ?>
        <!--article>
        	<form action="PhPinscription.php" method="post">
            	<ul>
                	<li>Votre pseudo</li>
                    <div class="rouge">
                    <label>Choisissez votre pseudo :</label> 
                    <input type="text" name="pseudo"/> 
                    <br/>
                    </div>
                    <li>Vos informations</li>
                    <div class="rouge">
                        <label for="">Sexe</label>
                        <input type="radio" name="sexe" value="homme"/> Homme
                        <input type="radio" name="sexe" id="femme" value="femme"/> Femme
                        <br/>
                        <label for="">Prénom</label>
                        <input type="text" name = "prenom"/>
                        <br/>
                        <label for="">Nom</label>
                        <input type="text" name="nom"/>
                        <br/>
                        <label for="">adresse email</label>
                        <input type="email" name="mail"/>
                        <br/>
                        <label for="" >Mot de passe</label>
                        <input type="password" name="password"/>
                        <br/>
                        <label for="" >Confirmation mot de passe</label>
                        <input type="password" name="passwordConf"/>
                        <br/>
                        <label for="">Date de naissance</label>
                        <input type="number" class="date" name="jour" max="31" min="1">
                        <select class="form-control" id="sel1" name="mois">
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
                        <input type="number" class="date" name="annee" max="2016" min="1900"/>
                        <br/>
                    </div>
                	    <li>Vos activités</li>
                	    <div class="rouge">
                         <input type="radio" name="sport" value="Oui" Checked/>  Vous êtes plutôt actif 
                	       <input type="radio" name="sport" id="sport" value="Non"/> Vous êtes plutôt bureau, voiture et rarement de sport<br/>
                	    </div>
                	  <input type="submit" value="Enregistrer"/>  
                </ul>
            </form>
        </article-->
<div class="container-fluid">
<div class="form-horizontal" id="myForm">
<form name="formula">
<!-- Pseudonyme input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="pseudonyme">Pseudonyme</label>  
  <div class="col-md-4">
  <input id="pseudo" name="pseudonyme" type="text" placeholder="Choose your pseudonyme" class="form-control input-md" required="">
    <span class="help-block hidden" id="helppseudonyme"></span>
  </div>
</div>

<!-- Email input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="Enter your email" class="form-control input-md" required="">
    <span class="help-block hidden" id="helpemail"></span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="pass1" name="password" type="password" placeholder="Enter password" class="form-control input-md" required="">
    <span class="help-block hidden" id="helppassword"></span>
  </div>
</div>

<!-- Confirm password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordConf">Confirm Password</label>
  <div class="col-md-4">
    <input id="pass2" name="passwordConf" type="password" placeholder="Confirm your password" class="form-control input-md" required="">
    <span class="help-block hidden" id="helppasswordConf"></span>
  </div>
</div>


<!-- Select Basic
<div class="form-group">
  <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
  <div class="col-md-4">
    <select id="blood_group" name="blood_group" class="form-control">
      <option value="-1">Select</option>
      <option value="1">A+</option>
      <option value="2">B+</option>
      <option value="3">AB+</option>
      <option value="4">O+</option>
      <option value="5">A-</option>
      <option value="6">B-</option>
      <option value="7">AB-</option>
      <option value="8">O-</option>
    </select>
  </div>
</div>
 -->

<!-- Nom input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Last Name</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="Enter your last name" class="form-control input-md" required="">
    <span class="help-block hidden" id="helpnom"></span>
  </div>
</div>

<!-- Prenom input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">First Name</label>  
  <div class="col-md-4">
  <input id="prenom" name="prenom" type="text" placeholder="Enter your first name" class="form-control input-md" required="">
    <span class="help-block hidden" id="helpprenom"></span>
  </div>
</div>
<!-- radios input -->
<div class="form-group" name="gender">
   <label class="col-md-4 control-label">Gender</label>
   <div class="col-md-2"> 
        <div class="input-group"> 
           <span class="input-group-addon"> 
           <input name="sexe" value="homme" type="radio" aria-label="Radio button for following text input" checked>
            </span> 
           <label class="form-control" for="homme">Male</label>
         </div>
     </div>
       <div class="col-md-2"> 
        <div class="input-group"> 
           <span class="input-group-addon"> 
           <input name="sexe" value="femme" type="radio" aria-label="Radio button for following text input">
            </span> 
           <label class="form-control" for="femme" >Female</label>
         </div>
     </div>
     <div class="col-md-4"></div>
</div>
<!-- Date de naissance input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dateNaiss">Date of birth</label>  
  <div class="col-md-4 date">
      <div class="input-group input-append date" id="dateRangePicker">
          <input type="text" class="form-control" id="dateNaiss" name="dateNaiss"Naiss placeholder="dd-MM-yyyy" required=""/>
          <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
      </div> 
      <span class="help-block hidden" id="helpdateNaiss"></span>
  </div>
</div>
<div class="form-group">
   <label class="col-md-4 control-label">Sports activities</label>
   <div class="col-md-4"> 
     <div class="input-group"> 
        <span class="input-group-addon"> 
        <input type="radio" name="sport" value="Oui" checked/>
         </span> 
        <label class="form-control x" for="sportAct">Active</label>
      </div>
      
  </div>
  <div class="col-md-4"></div>
</div>
<div class="form-group">
   <div class="col-md-4"></div>
    <div class="col-md-4"> 
     <div class="input-group"> 
        <span class="input-group-addon"> 
        <input type="radio" name="sport"  value="Non"/> 
         </span> 
        <label class="form-control x" for="sportPas" >Rarely active/ no sport</label>
      </div>
  </div>
  <div class="col-md-4"></div>
</div>
<!-- Button -->
<div class="form-group">
  <div class="col-md-4 control-label" for="signup"></div>
  <div class="col-md-4 x">
    <button id="submit" name="submit" type="button"class="btn btn-success">Sign Up</button>
  </div>
</div>

<div class="form-group">
   <div class="col-md-2 x"></div>
  <div class="col-md-6 control-label" id="result">
  
  </div>
</div>
   </form>
</div>
</div>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
    </body>
    <script>
            $(document).ready(function(){
               
               $("#submit").click(function(){
                  var form = document.formula; 
				  $("[id^='help']").addClass("hidden");
				  $("input").parent().removeClass("has-error");
                  if (form.checkValidity() == false) {
                     
                     var x = document.querySelector("#myForm input:invalid");//$("#myForm input:invalid");
                     //$("#result").html("<h2>Error, invalid " + x.name +"<br/> "+"</h2>");
					  $("[name='"+x.name+"']").parent().addClass("has-error");
					  $("#help" + x.name).html('Error, invalid ' + x.name);
					  $("#help" + x.name).removeClass("hidden");
                     console.log("err"+x.name);
                  }else{
                    var user_pseudo = $("#pseudo").val();
                    var user_sexe = $("input[name='sexe']:checked").val();
                    var user_prenom = $("#prenom").val();
                    var user_nom = $("#nom").val();
                    var user_email = $("#email").val();
                    var user_pass1 =$("#pass1").val();
                    var user_pass2 = $("#pass2").val();
                    var user_naissance = $("#dateNaiss").val();
                    var user_activite = $("input[name='sport']:checked").val();
                    $.ajax({
                        url: "PHPinscription.php",
                        data: {pseudo:user_pseudo,sexe:user_sexe,prenom:user_prenom,nom:user_nom,email:user_email,pass1 : user_pass1,pass2:user_pass2, naissance : user_naissance,activite:user_activite},
                        type: "POST",
                        success: function(data){
				   if (data == "Success") window.location.href = "identification.php";
				   else  //$("#result").html(data);
				   {
				      var error=data.indexOf("email")==-1?"passwordConf":"email";
					  $("[name='"+error+"']").parent().addClass("has-error");
					  $("#help" + error).html(data);
					  $("#help" + error).removeClass("hidden");
				   }
                        }
                   });
                  }
               }) ;
            });

        </script>
</html>
    
                	       