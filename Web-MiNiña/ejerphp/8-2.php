<html>
<head>
	<title>Formulario de entrada del dato</title>
</head>
	<body>
<?php

	echo "Su nombre es: ";
	echo $_REQUEST['nombre'];
	echo "<br>";
	echo "Su edad es: ";
	echo $_REQUEST['edad'];

	if($_REQUEST['edad'] >= 18 ){
		echo "<br>";
		echo "Es mayor de edad.";
	}
	
?>
	</body>
</html>

