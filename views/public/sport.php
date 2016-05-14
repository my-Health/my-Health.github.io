<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sport</title>
    <link rel="icon" href="../../image/lo-go.png"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    
    
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/sport.css"/>
</head>

<body>
    <?php include_once('Include/header.php') ?>
	<?php 
            if ($_SESSION['login'] == 'logged') include("../utilisateur/Include/nav-perso.php");
            else include("Include/nav-public.php");
    ?>
        <article>
            <div id="sport">
              <h4>FREELETICS</h4>
              <img src="../../image/freeletics.png" class="logo"/>
               <p>Freeletics is a program that combines full-body routines and exercises with running for a complete fat-shredding workout. It will push you beyond the limit, much like an athlete who is training for a race or a fight. You need to have an athlete-like mentality going in, and you will find yourself building agility and strength much like an athlete.</p>
                <a href="http://www.freeletics.com/en" target="_blank" class="btn btn-default">Read More</a>
            </div>
            <div id="sport">
            <h4>CrossFit</h4>
             <img src="../../image/crossfit.png" class="logo"/>
               <p>Le CrossFit axe son fonctionnement autour de dix compétences athlétiques : endurance cardiovasculaire et respiratoire, endurance musculaire, force, souplesse, puissance, vitesse, agilité, psychomotricité, équilibre et précision.Le programme CrossFit veut augmenter la capacité de travail dans ces différents domaines en provoquant par les entraînements des adaptations neurologiques et hormonales au travers des différentes filières métaboliques.</p>
                <a href="#" class="btn btn-default">Read More</a>
            </div>
            <div id="sport">
             <h4>T25</h4>
              <img src="../../image/T25.jpg" class="logo"/>
                <p>C'est un programme de sport super efficace ! On affine sa silhouette on peut perdre jusqu'à 10 kg ! Voilà à quoi on peut s'attendre avec Focus T 25 et en suivant le guide alimentaire et en buvant la boisson vitaminée shakeology.Le programme Focus T 25 dure 10 semaines.25 minutes par jour.5 jour par semaine</p>
                <a href="#" class="btn btn-default">Read More</a>
            </div>
            <div id="sport">
             <h4>Insanity</h4>
              <img src="../../image/insanity.jpg" class="logo"/>
               <p>Vendu comme étant le programme le plus difficile qui existe, mais également le plus connu avec P90X, Insanity est un concentré de vidéos cardio de très haut niveau qui, suivant le principe d'Interval Training, a pour but de faire fondre un maximum de graisse pour dévoiler nos muscles en un minimum de temps : 60 jours.</p>
                <a href="#" class="btn btn-default">Read More</a>
            </div>
        </article>
        <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
        </footer>
</body>
</html>
