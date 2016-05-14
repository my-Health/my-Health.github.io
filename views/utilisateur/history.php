<?php
	session_start();
	try {
	 $bdd = new PDO('mysql:host=localhost;dbname=identification;charset=utf8','root',''); 
	}catch(Exception $e){}
	$statement = "select Calorie_h, Poids, Date from historique where id_utilisateur='".$_SESSION["email"]."'";
	$statement .= " order by STR_TO_DATE(Date, '%d-%m-%Y');";
	$query = $bdd->query($statement);
	$toReturn = "new Morris.Line({";
	$table = "{ day:";
	$data = "element: 'chart' , data:[";
	while ($result = $query->fetch()) {
		$cals = $result[0];
		$weig = $result[1];
		$date = $result[2];
		$line = $table;
		$line .= "'$date'".", ";
		$line .= "cals:" . $cals . ", ";
		$line .= "weig:" . $weig . "},";
		$data .= $line;
	}
	$toReturn .= $data . "],";
	$toReturn .= "xkey: 'day',";
	$toReturn .= "ykeys: ['cals','weig'],";
	$toReturn .= "labels: ['Calories Consumed', 'Weight'],  parseTime: false";
	$toReturn .= "});";
	echo "$toReturn";
?>