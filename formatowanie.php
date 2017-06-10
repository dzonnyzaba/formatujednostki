<!DOCTYPE HTML>
<html lang="pl">
	<head>
	<meta charset="utf-8" />
	<title></title>
	<meta name="description" content="opis"/>
	<meta name="keywords" content="tagi"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
	

</script>
</head>

<body>

<form action="" method="post">
	wprowadź wartość: <input type="text" name="jedn"/><br><br>
	kategoria: 
	<select id="kat">
		<option value="dlugosc">długość</option>
	</select><br><br>
	formatuj z: <select name="startowa">
		<option value="km">km</option>
		<option value="m">m</option>
		<option value="cm">cm</option>
	</select><br><br>
	formatuj na: <select name="docelowa">
		<option value="km">km</option>
		<option value="m" selected>m</option>
		<option value="cm">cm</option>
	</select><br><br>
	<input type="submit" value="formatuj">
</form>

<?php
	$operator="";
	$oile = 0;
	if(isset($_POST['jedn']) && !empty($_POST['jedn'])){
		$input = $_POST['jedn'];
		
		if(!is_numeric($input)){
			echo "wartość musi być liczbą, a nie jest";
		}else{
			$dl = strlen($input);
			
			
			$startowa = $_POST['startowa'];
			$docelowa = $_POST['docelowa'];
			if(($startowa == 'km') && ($docelowa == 'm')){
				echo $input." ".$startowa." jest równe ".$input*1000 .$docelowa;
			}
			if(($startowa == 'm') && ($docelowa == 'cm')){
				echo $input." ".$startowa." jest równe ".$input*100 .$docelowa;
			}
			if(($startowa == 'km') && ($docelowa == 'cm')){
				echo $input." ".$startowa." jest równe ".$input*100000 .$docelowa;
			}
			if(($startowa == 'cm') && ($docelowa == 'm')){
				echo $input." ".$startowa." jest równe ".$input/100 .$docelowa;
				if($dl>2) echo " czyli ".substr($input, 0, -2)." $docelowa i ". substr($input, -2).$startowa;
			}
			if(($startowa == 'm') && ($docelowa == 'km')){
				echo $input." ".$startowa." jest równe ".$input/1000 .$docelowa;
				if($dl>3) echo " czyli ".substr($input, 0, -3)." $docelowa i ". substr($input, -3).$startowa;
			}
			if(($startowa == 'cm') && ($docelowa == 'km')){
				echo $input." ".$startowa." jest równe ".$input/100000 .$docelowa;
				if($dl>6) echo " czyli ".substr($input, 0, -5)." $docelowa i ". substr($input, -5).$startowa;
			}
		}
	}else{
		echo "nie ma nic";
	}
?>



</body>
</html>