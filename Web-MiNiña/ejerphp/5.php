<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>  
   <title>Cosas de variables - IMC</title>
<!--
 Ejercicios basados en el capítulo 3: "Primeros pasos en PHP" del libro:

 Domine PHP y MySQL - Programación dinámica en el lado del servidor 
 José López Quijado
 Ra-Ma, 2006

 http://www.ra-ma.es/libros/DOMINE-PHP-Y-MYSQL-PROGRAMACION-DINAMICA-EN-EL-LADO-DEL-SERVIDOR-INCLUYE-CD-ROM/247/978-84-7897-751-2
-->
</head>

<body>
<?php
	//Este código tiene como objeto preparar el texto de encabezado para la salida de cada ejercicio numerado
	$ejercicio=0;
	$texto="<p>\n==== Ejercicio número ";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Simplemente lo que hace este codigo es inicializar
  	// una variable, y despues la muestra por pantalla.
  
	$saludo="Buenas tardes";
	echo "El saludo es: $saludo";
	echo "\n</p>";

?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Este es el mismo ejercicio, pero como tiene comillas
  	// simples, no funciona, ya que no detecta la variable.
	$saludo="Buenas tardes";
	echo 'El saludo es: $saludo';
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Es el mismo ejercicio, pero con el caracter \ toma
  	// lo que viene después como carácter.
	$saludo="Buenas tardes";
	echo "El saludo es: \$saludo";
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Es el mismo ejercicio anterior, pero al tener las comillas
  	// simples no toma siquiera el caracter \ ya que toma todo como
  	// texto.
	$saludo="Buenas tardes";
	echo 'El saludo es: \$saludo';
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Este ejericio, le resta uno a $número, pero lo resta despues,
	// por lo que sigue saliendo 10, pero si hiciesemos un echo de 
	// $numero despues de --, saldría 9
	$numero=10;
	echo $numero--;
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Y aquí vuelve a restar uno, pero antes, por eso sale 28,
	// por que si muestra lo restado, y como numero antes era 9
	// al sumarle 20 y restarle otro, queda 28.
	$numero+=20;
	echo --$numero;
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// 
	$numero_largo=12345.067890;
	echo "La variable \$numero_largo contiene: ".$numero_largo." cuyo tipo es: ".gettype($numero_largo)."<br />";
	echo "La función is_float(\$numero_largo) devuelve: ".is_float($numero_largo)."<br />";
	settype ($numero_largo,"integer");
	echo "Ahora la variable \$numero_largo contiene: ".$numero_largo." y su nuevo tipo es: ".gettype($numero_largo)."<br />";
	echo "La función is_float(\$numero_largo) devuelve: ".is_float($numero_largo)."<br />";
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Comentario-8
	$precio=19.95;
	echo "La variable precio contiene: ".$precio." cuyo tipo es: ".gettype($precio)."<br />";
	echo "La función is_int(\$precio) devuelve: ".is_int($precio)."<br />";
	$precio=(int)$precio;
	echo "Ahora la variable \$precio contiene: ".$precio." y su nuevo tipo es: ".gettype($precio)."<br />";
	echo "La función is_int(\$precio) devuelve: ".is_int($precio)."<br />";
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Comentario-9
	echo "La función empty(\$fecha) devuelve: ".empty($fecha)." y la función isset(\$fecha) devuelve: ".isset($fecha)."<br />";
	$fecha="08 de enero de 2013";
	echo "Ahora la función empty(\$fecha) devuelve: ".empty($fecha)." y la función isset(\$fecha) devuelve: ".isset($fecha)."<br />";
	echo "La variable \$fecha contiene: ".$fecha." cuyo tipo es: ".gettype($fecha)."<br />";
	echo "La función is_string(\$fecha) devuelve: ".is_string($fecha)."<br />";
	settype ($fecha,"float");
	echo "Ahora la variable \$fecha contiene: ".$fecha." y su nuevo tipo es: ".gettype($fecha)."<br />";
	$fecha=(bool)$fecha;
	echo "Ahora la variable \$fecha contiene: ".$fecha." y su nuevo tipo es: ".gettype($fecha)."<br />";
	echo "\n</p>";
?>

<?php
	echo $texto.++$ejercicio." ====<br />\n";
	// Comentario-10
	$otro_saludo="saludo";
	echo $$otro_saludo."\n</p>";
	$palos=array("Oros", "Copas", "Espadas", "Bastos");
	echo "\n<pre>\n";
	print_r($palos);
	$aprobar=True;
	$numero_e= 2.71828;
        var_dump($saludo, $ejercicio, $aprobar, $numero_e, $palos, $otro_saludo);
	echo "</pre>\n";
?>

</body>

</html> 
