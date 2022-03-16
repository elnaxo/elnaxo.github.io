<html>
<head>
	<title>Formulario de entrada del dato IMC</title>
</head>
	<body>

<?php

	echo $_REQUEST['nombre'];
	echo "<br>";
	
	if ($_REQUEST['ra1'] == "noestudios") {
		echo "No tiene estudios";
	}

	if ($_REQUEST['ra1'] == "primarios") {
		echo "Tiene estudios primarios";
	}
	
	if ($_REQUEST['ra1'] == "secundarios") {
		echo "Tiene estudios secundarios";
	}

?>

	</body>
</html>

