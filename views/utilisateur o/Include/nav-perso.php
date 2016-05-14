    <script src="../../js/activ.js"></script>
    <link rel="stylesheet" href="../../css/navbar.css"/>
    <link rel="stylesheet" href="../../css/andika.css">
    <nav class="navbar custom" >
  <div class="container-fluid nopadd">
   <div class="navbar-header custom">
      <button type="button" class="navbar-toggle custom" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav custom first">
      <li><a href="../public/index.php">Home</a></li>
      <li><a href="../public/nutrition.php">Nutrition</a></li>
      <li><a href="../public/sport.php">Sport</a></li>
      <li><a href="../public/motivation.php">Motivation</a></li>
      <li><a href="../public/communaute.php">Community</a></li>
      <li><a href="../public/reference.php">References</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right custom last">
      <li><a href="../utilisateur/profil.php"><span class="glyphicon glyphicon-home"></span> Profile (<?php  echo $_SESSION['prenom'] ?>)</a></li>
      <li><a href="../public/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
     </div>
  </div>
</nav>