<?php
    session_start();
    $_SESSION["breakfast"]= array("proteine"=>0,"carbs"=>0,"fiber"=>0,"fat"=>0,"sugar"=>0,"calorie"=>0);
    $_SESSION["lunch"]= array("proteine"=>0,"carbs"=>0,"fiber"=>0,"fat"=>0,"sugar"=>0,"calorie"=>0);
    $_SESSION["diner"]= array("proteine"=>0,"carbs"=>0,"fiber"=>0,"fat"=>0,"sugar"=>0,"calorie"=>0);
    $_SESSION["col1"]= array("proteine"=>0,"carbs"=>0,"fiber"=>0,"fat"=>0,"sugar"=>0,"calorie"=>0);
    $_SESSION["col2"]= array("proteine"=>0,"carbs"=>0,"fiber"=>0,"fat"=>0,"sugar"=>0,"calorie"=>0);
    $_SESSION["total"]=0;
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>MyHealth</title>
		<link rel="icon" href="../../image/lo-go.png"/>
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../css/jquery.dataTables.min.css"/>
         <script src="../../js/jquery.dataTables.min.js"></script>    
        <script src="../../js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../css/morris.css"/> 
        <script src="../../js/raphael-min.js"></script>
         <script src="../../js/morris.min.js"></script>
          
        <link rel="stylesheet" href="../../css/profile.css"/>
        <script>
			var ids = {};
			var table;
            $(document).ready(function() {
				
                 table = $('#example').DataTable({
					"scrollCollapse": true,
					"paging": true
				});
				 
				//$('#example tbody td input[type="checkbox"]').on( 'click', function () {
					//var v = table.row( this ).data().DT_RowId;
					var data = table.rows().data();
					//console.log($(this));
// data.each(function (value, index) {
//     console.log('Data in index: ' + index + ' is: ' + value);
 //});			
				table.rows().every(function(){
				var myrow = this;
				$(myrow.node()).find("input[type='checkbox']").click(function(){
					//var element = this.parentElement.parentElement;
					var id = myrow.node().id;
					console.log("id is: " + id);
					if (ids.hasOwnProperty(id)) ids[id]=!ids[id];else ids[id] = true;
					for (var key in ids){
						if(ids.hasOwnProperty(key)){
							console.log(key + " => " + ids[key]);
						}
					}/*
				});
				===============
				 $("#example input[type='checkbox']").click(function(){
    var number = $(this).parent().next().next().find("input").val();
    $(this).attr("value",number);
    $(this).parent().next().prop("value",number);
    if ($(this).get(0).checked)
        console.log(
          number+" xxx "+$(this).parent().next().prop("value")
		);
	 //$(this).get(0).checked = false;
			 //$(this).prop("checked", false);
			 //error console.log($("input:checked").length);
				 table.rows().every(function(){
					 var line = $(this).node();
					 console.log(line.className);
				 });*/
				});
				});
					//console.log(this);
            });
        </script>
	</head>
    <body>
       
        <marquee height="20px" bgcolor="gray" style="color:white">
            Hey <?php echo $_SESSION['pseudo'] ?> Hope you're doing well.
             I suggest that you go for your workout NOW or maybe start a new challenge. A one hour workout is just 4 percent of your day! ||
            To achieve something you’ve never had before, you must do something you’ve never done before. ||
            Go make yourself some healthy recipes.||
            So will you go for it or let things just stay the same?
        </marquee>
        <?php
            include ("../public/Include/header.php");
            include ("Include/nav-perso.php");
        ?>
        <div class="container">
        <h1>Choose your aliments</h1>        
        <div id="tableau">
            <table id="example" class="table table-striped table-bordered"  width="100%" >
                <thead>
                    <tr>
                        <th></th>
                        <th>Aliment</th>
                        <th>Quantity</th>
                        <th>Protein</th>
                        <th>Carbs</th>
                        <th>Fiber</th>
                        <th>Fat</th>
                        <th>Sugar</th>
                        <th>Calories</th>
                    </tr>
                </thead>
                <tbody>
                   <div>
                        <?php
                           try{
                               $con = new PDO("mysql:host=localhost;dbname=identification","root","");
                           } 
                            catch(Exeption $e){
                                die("Erreur ".$e->getMessage());
                            }

                            $run = $con->query("select * from aliment");
                      $span  = "<span class=\"input-group-addon\">gram(s)</span>";
                      $input = "
                      <div class=\"form-group\">
   
   <div class=\"col-md-10\"> 
      <div class=\"input-group\">
          <input value=\"100\" placeholder=\"quantity in grams\" type=\"number\" step=\"any\"  min=\"1\" class=\"form-control\"/>$span</div>     
   </div>
     <div class=\"col-md-8\"></div>
</div>";
                      
                            while($result=$run->fetch()){
                                //echo "<tr> <td> <input type='checkbox' id='$result[0]'/></td> <td>$result[1]</td><td><input type='number' min='1'/></td><td>$result[4]</td> </tr>";
                               
                                echo "<tr id='$result[0]'> <td> <input type='checkbox'/></td> <td>$result[1]</td><td>$input</td>";
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
        <form class="form-inline" id="chooser">
        
        <select id="meal" class="form-control">
                       
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="diner">Diner</option>
                        <option value="col1">Morning Snack</option>
                        <option value="col2">Afternoon Snack</option>
       </select>
           <input class="btn btn-success" type="button" id="myList" value="Add to my list"/>
           <label id="veri" class="text text-success" style="font-size:16px;margin-left:15px;"></label>
   
			<input class="btn btn-warning pull-right" type="button" id="myList" value="Check History" onclick="historyCheck()" data-toggle="modal" data-target="#historyModal"/>
        </form>
        <?php
			include("Include/historyModal.php");	
		?>
        <script id="magic"></script>
        <script >
			function historyCheck() {
				$.ajax({
					url: "history.php",
					data: {},
					type: "POST",
					success: function(dataReturned){
						$("#chart>h1").remove();
						$("#magic").html(dataReturned);
						

					}
				});
			}
			
			</script>
        <script>
            $(document).ready(function(){
                $("#myList").click(function(){
					document.getElementById("veri").innerHTML = "Saving aliments...";
                    setTimeout(function(){ document.getElementById("veri").innerHTML = " " },1000);/*
                    var tab =$("td input[type='checkbox']:checked");
					console.log(ids);
                    $("input[type='checkbox']:checked").attr('checked',false);
					document.getElementById("veri").innerHTML = "Saving aliments...";
                    setTimeout(function(){ document.getElementById("veri").innerHTML = " " },1000);
                    for (var i=0;i<tab.length;i++) {
                        var iid = tab[i].parentElement.parentElement.id;
                        var quantity = $("tr#"+iid+" input[type='number']").val();
                        var meal = $("#meal").val();
                        //fonctionnalité du modal
                        $.ajax({
                            url: "search.php",
                            data: {table : tab[i].parentElement.parentElement.id,quantite: quantity,meal: meal},
                            type: "POST",
                            success:function(data){
                                $("#"+meal+"X").after(data);
                                //_______________
                                $.ajax({
                                    url: "session.php",
                                    data:{meal :meal},
                                    type: "POST",
                                    success: function(don){
										$("#total"+meal).html(don);
                                    }

                                });
                                $.ajax({
                                    url: "total.php",
                                    data:{},
                                    type: "POST",
                                    success: function(don){
                                        $("#total").html(don);
                                    }
                                    
                                });
                               //_________________ 
                            }
                        });
                        //fonctionnalité du panel
                        
                    }*/
					/*for (var key in ids){
						var quantity = $('tr#'+key+' input[type="number"]').val();
						console.log("quantity for " + key + ", is: " + quantity);
						var meal = $("#meal").val();
                        //fonctionnalité du modal
                        $.ajax({
                            url: "search.php",
                            data: {table :key,quantite: quantity,meal: meal},
                            type: "POST",
                            success:function(data){
                                $("#"+meal+"X").after(data);
                                //_______________
                                $.ajax({
                                    url: "session.php",
                                    data:{meal :meal},
                                    type: "POST",
                                    success: function(don){
                                        if(meal=="breakfast"){
                                            $("#total1").html(don);    
                                        }
                                        else if(meal=="lunch"){
                                            $("#total2").html(don);
                                        }
                                        else if(meal=="diner"){
                                            $("#total3").html(don);
                                        }
                                        else if(meal=="col1"){
                                            $("#total4").html(don);
                                        }
                                        else{
                                            $("#total5").html(don);
                                        }
                                    }

                                });
                                $.ajax({
                                    url: "total.php",
                                    data:{},
                                    type: "POST",
                                    success: function(don){
                                        $("#total6").html(don);
                                    }
                                    
                                });
                               //_________________ 
                            }
                        });
					}*/
                    
			//ids = {};
					//=====here starts iterators===== lol
					//var counter = 0;
					/* this is working but better to optimize it tho
					table.rows().every(function(){
						var mynode = this.node();
						var input = $(mynode).find("input:checked");
						
						if (input.length != 0) {
							input[0].checked = false;
							var quantity = $(mynode).find("input[type='number']").val();
							$(mynode).find("input[type='number']").val(100);
							var meal = $("#meal").val();
							// now I have the quantity the id and the meal time for ajax!
							//=======================
							$.ajax({
								url: "search.php",
								data: {table : mynode.id,quantite: quantity,meal: meal},
								type: "POST",
								success:function(data){
									$("#"+meal+"X").after(data);
									$.ajax({
										url: "session.php",
										data:{meal :meal},
										type: "POST",
										success: function(don){
											$("#total"+meal).html(don);
										}
									});
									$.ajax({
										url: "total.php",
										data:{},
										type: "POST",
										success: function(don){
											$("#total").html(don);
										}

									});
								}
							});
							//==========================
							
							//console.log("id: "+mynode.id+", quantity: " + quantity);
							//counter++;
						}
					});*/
					//console.log(ids);
					//ids={1:true, 2:false, 3:true};
					console.log(ids);
					for (var key in ids){
						if(ids.hasOwnProperty(key) && ids[key] == true){
							var mynode = table.row(key-1).node();
							var input = $(mynode).find("input:checked");
							if (input[0] != undefined)
								input[0].checked = false;
							var quantity = $(mynode).find("input[type='number']").val();
							$(mynode).find("input[type='number']").val(100);
							var meal = $("#meal").val();
							//=======ajax start==========
							$.ajax({
								url: "search.php",
								data: {table : mynode.id,quantite: quantity,meal: meal},
								type: "POST",
								success:function(data){
									$("#"+meal+"X").after(data);
									$.ajax({
										url: "session.php",
										data:{meal :meal},
										type: "POST",
										success: function(don){
											$("#total"+meal).html(don);
										}
									});
									$.ajax({
										url: "total.php",
										data:{},
										type: "POST",
										success: function(don){
											$("#total").html(don);
										}

									});
								}
							});
							//=======ajax end============
						}
					}
					ids={};
					//console.log(counter);
                });     
				
            });
        </script>
        <table class="table table-bordered" width="100%" id="panel" style="margin:15px 0">
            <tr>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Diner</th>
                <th>Snack</th>
            </tr>
        </table>
       
        <?php
            include ("Include/modalcalcul.php");
        ?>
   </div>
   <footer class="container-fluid bg-4 text-center">
            <p class="pull-right">© 2016 MyHealth</p> 
		 </footer>
    </body>
</html>