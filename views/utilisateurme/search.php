<?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=identification;charset=utf8','root','');     
    }
    catch(Exception $e){
        die("Erreur : ". $e->getMessage());
    }
    $_SESSION["breakfast"]=0;
    $_SESSION["lunch"]=0;
    $_SESSION["diner"]=0;
    $_SESSION["col1"]=0;
    $_SESSION["col2"]=0;
    $id = $_POST["table"];
    $quantite = $_POST["quantite"];
    $run = $con->query("select * from aliment where ID_Aliment ='$id'");
    if($result = $run->fetch()){
        echo "  <tr>
                <td>$result[1]</td>
                <td>$quantite </td>
                <td>".$result[2]*$quantite."</td>
                <td>".$result[3]*$quantite."</td>
                <td>".$result[7]*$quantite."</td>
                <td>".$result[5]*$quantite."</td>
                <td>".$result[6]*$quantite."</td>
                <td>".$result[4]*$quantite."</td>
                </tr>
            ";    
    }
?>
