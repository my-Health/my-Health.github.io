<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nutrition</title>
    <link rel="icon" href="../../image/lo-go.png"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <style>
		body{overflow-x: hidden;}
	</style>
</head>

<body>
    <?php include("Include/header.php") ?>
	<?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php")
    ?>
      <div class="row">
       <div class="container ">
          <div class="col-md-12">
			<article>
			   <h2>T-25 Nutrition Program</h2>
			   <embed width="100%" height="800px" src="../../docs/T25-Nutrition-Guide.pdf" type="application/pdf"/>
			</article>
         </div>
       </div>
   	  </div>
      <div class="row">
       <div class="container ">
          <div class="col-md-12">
			<article>
			   <h2>Freeletics Nutrition Guide</h2>
			   <embed width="100%" height="800px" src="../../docs/Guide%20nutritionnel%20Freeletics%20-%20Cardio-Force.pdf" type="application/pdf"/>
			</article>
         </div>
       </div>
   	  </div>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
</body>
</html>
