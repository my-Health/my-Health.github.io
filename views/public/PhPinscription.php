<?php 
    
    $pseudo = $_POST["pseudo"];
    $sexe = $_POST["sexe"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $mail = $_POST["email"];
    $pass =$_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $jour = $_POST["naissance"];
    $activite = $_POST["activite"];

    //connec to database
    if($pass != $pass2){
         echo "Error: passwords aren't identical";
    }
    else{
       $pass=md5($pass);
       try{
            $bdd = new PDO('mysql:host=localhost;dbname=identification;charset=utf8','root',''); 
        }
        catch(Exception $e){
            die("Erreur : ". $e->getMessage());
        }
        $run = $bdd->query("select * from utilisateur where mail = '$mail'");
        if($result = $run->fetch()){
            echo "This email already exists!";
        }
        else{
            $run_write = $bdd->query("insert into utilisateur (mail,password,nom,prenom,pseudonyme,sexe,naissance,activité) values ('$mail','$pass','$nom','$prenom','$pseudo','$sexe','$jour','$activite')");
            //$run_write = $bdd->query("insert into utilisateur (mail,password,nom) values ('$mail','$pass','$nom') ");
            if($run_write == true){
                echo "Success";
            }
        }
    }
?>
