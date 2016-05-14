<?php 
   session_start();
   $total = $_SESSION["total"];
   //echo "<h1>".$_SESSION['email']."</h1>";
   $id = $_SESSION['email'];
   
   $query ="insert into historique(Calorie_h, Date, Id_utilisateur)  values(".$_SESSION["total"].", '".Date("d-m-Y")."', '".$id."')";
   try {
       $bdd = new PDO('mysql:host=localhost;dbname=identification;charset=utf8','root',''); 
         $set = $bdd->query($query);
       if ($set == true)
      echo "database successfully updated";
      else echo "not set no exception tho";
   }catch(Exception $e){ echo "wtf just happened".$e->getMessage();}
   $bdd = null;
?>