<?php

function prueba() {
	static$x=0; 
	echo $x;
	$x++;
}

prueba();
prueba();
prueba();

?>