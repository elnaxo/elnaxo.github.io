<html>
<head>
</head>
	<body>

<?php

	echo $_REQUEST['nombre'];
	
	if ($_REQUEST['cantidad'] == 3) {
		echo " tiene que pagar impuestos.";
	} else {
		echo " no tiene que pagar nada de impuestos.";
	}

?>

</body>
</html>

