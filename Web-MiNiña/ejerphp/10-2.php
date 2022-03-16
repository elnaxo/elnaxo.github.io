<html>
<head>
</head>
	<body>

<?php

	$deportes = 0;

	if (isset($_REQUEST['deporte1'])) {
	$deportes++;
	}

	if (isset($_REQUEST['deporte2'])) {
	$deportes++;
	}

	if (isset($_REQUEST['deporte3'])) {
	$deportes++;
	}

	if (isset($_REQUEST['deporte4'])) {
	$deportes++;
	}
	
	echo $_REQUEST['nombre'];
	echo " practica $deportes deportes.";
	

?>

	</body>
</html>



	</body>
</html>

