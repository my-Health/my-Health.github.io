<?php
    session_start();
    $meal = $_POST["meal"];
        if($meal =="breakfast"){
            echo $_SESSION["breakfast"]["calorie"];   
        }
        else if($meal =="lunch"){
            echo $_SESSION["lunch"]["calorie"];
        }
        else if($meal =="diner"){
            echo $_SESSION["diner"]["calorie"];;
        }
        else if($meal =="col1"){
            echo $_SESSION["col1"]["calorie"];
        }
        else{
            echo $_SESSION["col2"]["calorie"];
        }
    
?>