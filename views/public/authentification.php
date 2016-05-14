<?PHP
    //connection to data base


    
    function identification ($login,$pass){
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=identification;charset=utf8','root',''); 
        }
        catch(Exception $e){
            die("Erreur : ". $e->getMessage());
        }

        //$query = $bdd->query('SELECT * FROM utilisateur  WHERE mail= \''.$login.'\' and password = \''.$pass.'\'');
        $query = $bdd->query("SELECT * FROM utilisateur  WHERE mail= '".$login."' and password = '".$pass."'");
        if($result = $query->fetch()){
            $_SESSION['prenom'] = $result[3];
            $_SESSION['nom'] = $result[2];
            $_SESSION['pseudo'] = $result[4];
            $_SESSION['login'] = 'logged';
            $_SESSION['email'] = $login;
			$_SESSION['gender'] = $result[5];
			$_SESSION['birth'] = $result[6];
			$_SESSION['activity'] = $result[7];
            header('location: ../utilisateur/profil.php');
        }
        
        else  header('location: identificationErreur.php');
            
    }
    session_start();
    $login = $_POST["email"];
    $password = md5($_POST["password"]);
    identification($login,$password);
     
    //$reponse->closeCursor();
?>