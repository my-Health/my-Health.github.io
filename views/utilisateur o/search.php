<?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=identification;charset=utf8','root','');     
    }
    catch(Exception $e){
        die("Erreur : ". $e->getMessage());
    }

    $id = $_POST["table"];
    $quantite = $_POST["quantite"];
    $run = $con->query("select * from aliment where ID_Aliment ='$id'");
    if($result = $run->fetch()){
        echo "<tr> <td>nomAliment $result[1] </td><td> calorie $result[4] </td><td> quantité:$quantite</td></tr>";    
    }
?>
