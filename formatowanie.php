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
	<!--<input type="radio" name>-->
	<input type="submit" value="formatuj">
</form>

<?php
	if(isset($_POST['jedn']) && !empty($_POST['jedn'])){
		echo "jestem";
	}else{
		echo "nie ma nic";
	}
?>
</body>
</html>