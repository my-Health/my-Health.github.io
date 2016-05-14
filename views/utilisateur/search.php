<?php
    session_start();
    try{
        $con = new PDO('mysql:host=localhost;dbname=identification;charset=utf8','root','');     
    }
    catch(Exception $e){
        die("Erreur : ". $e->getMessage());
    }
    $id = $_POST["table"];
    $quantite = $_POST["quantite"];
    $quantAliment = $quantite / 100;
    $meal = $_POST["meal"];
    $run = $con->query("select * from aliment where ID_Aliment ='$id'");
    if($result = $run->fetch()){
        //garder les calories pour les afficher après
       	$values = array("proteine"=>2, "carbs"=>3, "fiber"=>7, "fat"=>5, "sugar"=>6, "calorie"=>4);
	   foreach($values as $key=>$value){
		  $_SESSION[$meal][$key] += $result[$value] * $quantAliment;
	   }

        //data à retourner à ajax
        $_SESSION["total"] = $_SESSION["breakfast"]["calorie"]+$_SESSION["lunch"]["calorie"]+$_SESSION["diner"]["calorie"]+$_SESSION["col1"]["calorie"]+$_SESSION["col2"]["calorie"];
        echo "  <tr>
                <td>$result[1]</td>
                <td>$quantite </td>
                <td>".$result[2]*$quantAliment."</td>
                <td>".$result[3]*$quantAliment."</td>
                <td>".$result[7]*$quantAliment."</td>
                <td>".$result[5]*$quantAliment."</td>
                <td>".$result[6]*$quantAliment."</td>
                <td>".$result[4]*$quantAliment."</td>
                </tr>
            ";
        
    }
?>



