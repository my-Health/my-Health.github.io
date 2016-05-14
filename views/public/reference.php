<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>References</title>
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
    ?>
       <div class="container">
          <div class="row" >
             <div class="col-md-6">
               <article>
               <h2>Get Started with Freeletics now!</h2>
                <iframe src="https://www.freeletics.com/en" width="100%" height="660px"></iframe>
                </article>
             </div>
             <div class="col-md-6">
               <article>
               <h2>Boost up with bodyweight workout!</h2>
                <iframe src="http://www.bodyweight-workout.com" width="100%" height="660px"></iframe>
                </article>
             </div>
          </div>
       </div>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
</body>
</html>
