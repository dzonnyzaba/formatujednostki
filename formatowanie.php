<!DOCTYPE HTML>
<html lang="pl">
	<head>
	<meta charset="utf-8" />
	<title></title>
	<meta name="description" content="opis"/>
	<meta name="keywords" content="tagi"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<form action="" method="post">
	wprowadź wartość: <input type="text" name="jedn"/>
	kategoria: 
	<select>
		<option value="dlugosc">długość</option>
		<option value="waga">waga</option>
	</select>
	jednostka z: <select>
		<option value="km">Volvo</option>
		<option value="saab">Saab</option>
		<option value="mercedes">Mercedes</option>
		<option value="audi">Audi</option>
	</select>
	<input type="submit" value="formatuj">
</form>

<?php
	if(isset($_POST['jedn']) && !empty($_POST['jedn'])){
		$input = $_POST['jedn'];
		
		if(!is_numeric($input)){
			echo "wartość musi być liczbą a nie jest";
		}else{
			$war = $input;
			echo $war;
			if($war>=1000){
				
			}
		}
	}else{
		echo "nie ma nic";
	}
?>
</body>
</html>