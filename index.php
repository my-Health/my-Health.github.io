<?php
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login'] = '';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>MyHealth</title>
        <link rel="icon" href="../../image/lo-go.png"/>
         <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
       <script src="../../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../css/stylesheet.css"/>
        <link rel="stylesheet" href="../../css/meriweather.css"/>
        <script src="../../js/conversionah.js"></script>
		<?php
			if ($_SESSION['login'] != '') {
				if ($_SESSION['gender']=='femme') $gender = "female"; else $gender = "male";
				echo "<script id='xxx'>".
					'$(document).ready(function(){'.
					'$(\'input[value="'.
					$gender.
					'"]\').prop("checked", true);'.
					'$(\'input[value="'.
					$_SESSION['activity'].
					'"]\').prop("checked", true);'.
					'$("#age").val('.getAge().');'.
					'});</script>';
			}
			function getAge(){
				if (isset($_SESSION['login']))
					$birth = intval(substr($_SESSION['birth'], -4));
				else $birth = 0;
				return intval(date("Y")) - $birth;
			}
		?>
		
    </head>
    <body>
        <?php include("Include/header.php"); ?>
        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
     <li class="img-circle center-block active" data-target="#carousel-example-generic" data-slide-to="0"></li>
     <li class="img-circle center-block" data-target="#carousel-example-generic" data-slide-to="1"></li>
     <li class="img-circle center-block" data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="../../image/fruits-n-veggies.jpg" alt="Image 1" height="200px"/>
    </div>
    <div class="item">
        <img src="../../image/cover.jpg" alt="Image 2" height="200px"/>
    </div>
    <div class="item">
        <img src="../../image/eat-green.jpg" alt="Image 3" height="1100px"/>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
        <?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php");
        ?>
 <div class="row">  
 <div class="col-md-2"></div>
<div class="col-md-2">
	<div class="alert alert-info">
	  Fill in this form and get to know your daily needed calories as well as your BMI(Body Mass Index)
	</div>
</div>
<div class="col-md-8">       
<div class="container-fluid">
<div class="form-horizontal" id="myForm" >
<form name ="formula">
<!-- radios input -->
<div class="form-group">
   <label class="col-md-2 control-label">Gender</label>
   <div class="col-md-3"> 
        <div class="input-group"> 
           <span class="input-group-addon"> 
           <input name="gender" id="homme" value="male" type="radio" aria-label="Radio button for following text input" checked required="">
            </span> 
           <label class="form-control" for="homme">Male</label>
         </div>
     </div>
       <div class="col-md-3"> 
        <div class="input-group"> 
           <span class="input-group-addon"> 
           <input name="gender" id="femme" value="female" type="radio" aria-label="Radio button for following text input">
            </span> 
           <label class="form-control" for="femme" >Female</label>
         </div>
     </div>
     <div class="col-md-4"></div>
</div>

<!-- Weight input-->
<div class="form-group" name="gender">
   <label class="col-md-2 control-label">Weight</label>
   <div class="col-md-3"> 
         <div class="input-group">
          <input id="kg" placeholder="kg" type="number" step="any" class="form-control"checked onkeyup="ktop()" required="">
           <span class="input-group-addon " id="basic-addon1">kg</span>
           
         </div>
   </div>
    <div class="col-md-3"> 
      <div class="input-group">
       
        <input id="pound" placeholder="pound" type="number" step="any"  class="form-control" checked onkeyup="ptok()"/>
        <span class="input-group-addon" id="basic-addon1">pound</span>
      </div>
    </div>
     <div class="col-md-3"></div>
</div>
<!-- Size cm/inch-->
<div class="form-group">
   <label class="col-md-2 control-label">Height</label>
   <div class="col-md-3"> 
         <div class="input-group">
          <input id="meter" name="meter" placeholder="cm" type="number" step="any" min="0.1"  class="form-control"checked onkeyup="mtofi()" required=""/>
           <span class="input-group-addon" id="basic-addon1">cm</span>
           
         </div>
   </div>
    <div class="col-md-3"> 
      <div class="input-group">
       <input id="foot" placeholder="foot" type="number" step="any"  class="form-control" checked onkeyup="fitom()"/>
        <span class="input-group-addon" id="basic-addon1">ft</span>
       <input id="inch" placeholder="inch" type="number" step="any"  class="form-control" checked onkeyup="fitom()"/>
        <span class="input-group-addon" id="basic-addon1">in</span>
      </div>
    </div>
     <div class="col-md-4"></div>
</div>

<!-- age-->
<div class="form-group">
   <label class="col-md-2 control-label">Age</label>
   <div class="col-md-3"> 
          <input id="age" name="age" value="12" placeholder="12+" type="number" step="any"  min="12"  class="form-control" required/>           
   </div>
     <div class="col-md-8"></div>
</div>





<div class="form-group">
   <label class="col-md-2 control-label">Sports Activities</label>
   <div class="col-md-6"> 
     <div class="input-group"> 
        <span class="input-group-addon"> 
        <input type="radio" name="sport" value="Oui" id="sportAct" checked/>
         </span> 
        <label class="form-control x" for="sportAct">Active</label>
      </div>
  </div>
  <div class="col-md-3"></div>
</div>
<div class="form-group">
   <div class="col-md-2"></div>
    <div class="col-md-6"> 
     <div class="input-group"> 
        <span class="input-group-addon"> 
        <input type="radio" name="sport" id="sportPas" value="Non"/> 
         </span> 
        <label class="form-control x" for="sportPas" >Rarely active/no sport</label>
      </div>
  </div>
  <div class="col-md-3"></div>
</div>
<!-- Button -->
<div class="form-group">
  <div class="col-md-3 control-label" for="signup"></div>
  <div class="col-md-4 x">
    <button type="button"id="submit" onclick="doIt()" name="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal" disabled>Calculate</button>
  </div>
   </div>
   </form>
</div>

</div>
</div>

</div>

                 <?php include("Include/calculindex.php"); ?>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
		 </footer>
    </body>
</html>