<?php

# Variables en php
// String o letras o palabras

$name="Joan";
$last_name="Hoyos";

echo "Mi nombre es: $name
y mi apellido es $last_name";

echo " mi nombre completo es: $name $last_name";

# numeros
// Variables Numeros

$numero= 28 ;
$fecha= 2022 ;
$altura=1.77 ;

echo $numero ;
echo $fecha ;
echo $altura ;


echo "mi edad es $numero";


// $this= "this";
// echo $this;
# this variable que NO puede ser Asignada


# cambio de valor de Variable
$x="politecnico";
$x= 2022;

echo $x;


// variables por referencia

$y="carlos";
$yy= &$y;


echo $y;
echo $yy;

// inicializacion de variables y valores po defecto
#estas son las mas utilizadas e importatnes para el diplomado

/*
$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_REQUEST
$_SESSION
$_ENV
$_COOKIE
*/

#Ámbito de las variables

/* Existen 3 ámbitos de variables diferentes:
- Local
- Global
- Estático
*/

#variable global vs local

/*
error por ser global, no se puede modificvar la variable si esta global , hay que estar en el nivel local

$x=0;
function prueba(){
	echo "Variable local".$x;
}
prueba();

$

*/

#local

function prueba() {
	$x=19;
	echo"La variable tiene un valor de: $x " ;
}
prueba ();


#global 

$edad=30;

function  test() {
	$GLOBALS['edad'] = 60;
	$edad=22;
}
test();

echo $edad;


#variables estaticas

function estatico() {
	static$z=0;
	echo $z;
	$z++;
}

estatico();
estatico();
estatico();


// Variables constantes CONST en mayusculas


const ESTUDIANTE ="estiven hoyos";
echo ESTUDIANTE;

//define



define("PROFESOR", "diego alejandro palacio");
echo PROFESOR;






?>