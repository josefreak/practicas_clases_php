<?php

include("clases_array.php");

include("clases.php");

$ob1 = new Persona("Jose","Jugar","El cocido","Musica");

echo $ob1->imprimir(); 

$array = array("Musica","Cocido","Jugar");

$ob2 = new Persona_array("Jose",$array);

echo $ob2->imprimir();
