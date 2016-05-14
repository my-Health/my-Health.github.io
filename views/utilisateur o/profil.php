<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>MyHealth</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../css/stylesheet.css"/>
        <link href="../../css/jquery.dataTables.min.css"/>
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/jquery.dataTables.min.js"></script>
        <script src="../../js/dataTables.bootstrap.min.js"></script>            
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>

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
        
        
        <div id="tableau">
            <table id="example" class="table table-striped table-bordered"  width="70%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Aliment</th>
                        <th>Quantité</th>
                        <th>Protéine</th>
                        <th>Carbs</th>
                        <th>Fiber</th>
                        <th>Fat</th>
                        <th>Sugar</th>
                        <th>Calories</th>
                    </tr>
                </thead>
                <tbody>
                   <div id="result">
                        <?php
                           try{
                               $con = new PDO("mysql:host=localhost;dbname=identification","root","");
                           } 
                            catch(Exeption $e){
                                die("Erreur ".$e->getMessage());
                            }

                            $run = $con->query("select * from aliment");
                            while($result=$run->fetch()){
                                //echo "<tr> <td> <input type='checkbox' id='$result[0]'/></td> <td>$result[1]</td><td><input type='number' min='1'/></td><td>$result[4]</td> </tr>";
                                echo "<tr id='$result[0]'> <td> <input type='checkbox'/></td> <td>$result[1]</td><td><input type='number' value='1' min='1' '/></td>";
                                $cal = $result[4];
                                $result[4] = $result[7];
                                $result[7] = $cal;
                                for ($i=2;$i<8;$i++) {
                                    echo "<td>$result[$i]</td>";
                                }
                                echo "</tr>";
                            }

                        ?>
                    </div>
                </tbody>
            </table>    
        </div>
        <input type="button" id="myList" value="add to my list"/>
        
        <script>
            $(document).ready(function(){
                $("#myList").click(function(){
                    var tab =$("td input[type='checkbox']:checked");
                    
                    
                    for (var i=0;i<tab.length;i++) {
                        var iid = tab[i].parentElement.parentElement.id;
                        var quantity = $("tr#"+iid+" input[type='number']").val();
                        $.ajax({
                            url: "search.php",
                            data: {table : tab[i].parentElement.parentElement.id,quantite: quantity},
                            type: "POST",
                            success : function(data){
                                document.getElementById("reponse").innerHTML += data;
                            }
                        });
                    }
                    
                });                  
            });
        </script>
        <div id="tableauAliment">
           <table id="reponse"></table>    
        </div>
        <table class="table table-bordered" width="100%">
            
               <tr>
                <th>Petit-déjeuner</th>
                <th>Déjeuner</th>
                <th>Dîner</th>
                <th>Collation</th>
            </tr>
        </table>
        <?php
            include ("Include/modalcalcul.php");
        ?>
        <div class="container-fluid">
        <button class="btn btn-success">Voir la fiche complète</button>
        </div>
    </body>
</html>