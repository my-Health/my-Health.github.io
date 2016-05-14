<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>communauté</title>
    <link rel="icon" href="../../image/lo-go.png"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("Include/header.php") ?>
	<?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php");
    ?><div >
      <div class="col-md-3"></div>
       <div class="container-fluid text-center col-md-6" style="height:500px">
       	<div class="progress">
		  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
		  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">Under Construction
		  </div>
		</div>
       	<div>
       		<h3>Chat section will be available soon...</h3>
       	</div>
       </div>
       <div class="col-md-5"></div>
	</div>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
</body>
</html>
