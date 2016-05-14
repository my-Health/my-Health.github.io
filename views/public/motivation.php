<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Motivation</title>
    <link rel="icon" href="../../image/lo-go.png"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../css/motivation.css"/>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("Include/header.php") ?>
	<?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php");
    ?>
        <article>
            <div id="sport">
              <h4>FREELETICS</h4>
              <div>
                <embed width="100%" height="315"
src="http://www.youtube.com/embed/IiXbrNjkpZU"/>
                 
            </div>
            </div>
            <div id="sport">
            <div>
                <div>
                     <embed width="100%" height="315" src="http://www.youtube.com/embed/065ApX9k8TU"/>
                </div> 
                </div>
            </div>   
        </article>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
</body>
</html>
