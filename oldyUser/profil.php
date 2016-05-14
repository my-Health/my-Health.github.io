<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>MyHealth</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../css/stylesheet.css"/>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <marquee height="20px" bgcolor="gray" >
            Hey <?php echo $_SESSION['pseudo'] ?> j'espère que tu as la pêche. 
            J'ai des conseils pour toi : Pourquoi ne pas faire un petit workoout mainteanant ||
            To achieve something you’ve never had before, you must do something you’ve never done before. ||
            ou bien prépare ton petit déjeuner de champion pour de demain  ||
            Life´s too short to be small   
        </marquee>
        <?php
            include ("Include/header.php");
            include ("Include/nav-perso.php");
        ?>
        <h1> Entrez vos aliments</h1>
        <input type="text" id="search"/>
        <div id="result">
            
        </div>
        <script>
            $("#search").on("input",function(){
                $search = $("#search").val();
                if($search.length>0){
                    $.get("searching.php",{"search":$search},function($data){
                       $("#result").html($data); 
                    });
                }
            });
        </script>
    </body>
</html>