<?php
    try{
        //$bdd = new PDO("mysql:host=localhsot;dbname=test","root","");
        //$bdd = new PDO("mysql:host=localhost;dbname=test","root","");
        $bdd = new PDO("mysql: host=localhost;dbname=identification","root","");
    }
    catch(Exception $e){
        die("Erreur ".$e->getMessage());
    }
    
    $data = $bdd->query("SELECT * FROM aliment WHERE Nom_Aliment LIKE '%$_GET[search]%' ");
    
    while($result = $data->fetch()){
        echo $result['nom']."<br/>";
    }
?>


