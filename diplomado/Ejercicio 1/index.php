
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		ejercicios 1
	</title>
</head>
<body>

<form action="index.php" method="post">
  <label>Nombre: </label><input type="text" name="nombre">
  <label>Apellido</label><input type="text" name="apellido">
  <br><br>
  <input type="submit" name="Enviar" value="Enviar">
</form>





<?php


#Una variable que me permita almacenar el nombre de una persona.

print_r($_POST);


echo "<br>";

echo "El nombre en el fomrulario fue: ".$_POST["nombre"].$_POST["apellido"];

echo "<br>";


$nombre_estudiante= "Estiven caicedo";


echo "Tu nombre es: ". $nombre_estudiante;

// decimal variable
echo "<br>";

$x=2.55;
echo $x;

// Una variable constante para almacenar el valor del dólar en pesos colombianos.
echo "<br>";
const DOLAR=4413.89;
echo "el dolar esta valiendo $".DOLAR." Pesos colombianos";
echo "<br>";


?>
<section>
	

<button>Dolar en pesos</button>
<?php 
define("DOLARES","4413.89");
echo DOLARES;
 ?>


</section>

<section>
	
	 <?php
$decimales = 7;
if ($decimales == 7) {
    define("PI", 3.1415926);
} else {
    define("PI", 3.14);
}
print "<p>El valor de pi es " . PI . "</p>\n";
?>

<?php
echo pi(); // 3.1415926535898
print("<br>");
echo M_PI; // 3.1415926535898
	var_dump(M_PI);
?>

</section>

<section>

	<?php

	$decimal=15;
	if ($decimal == 15) {
		define ("euler",2.718281828459045);
	} 
	else {
		define ("euler",2.718);
	} 
	print "<p>El valor de euler es " . euler . "</p>\n";

	var_dump(euler);


$a = "10";

$b = 2;

echo $a + $b;

$a = false; $b = true; $c = true;

echo $a ? $b : $c;



 ?>
</section>


</body>
</html>

