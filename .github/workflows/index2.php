<?php

include("clases2.php");

$ob1 = new General("Texto1","Texto2");

$ob1->grabar_datos("Texto que queremos");
$ob1->grabar_datos("Texto que queremos2");
$ob1->grabar_datos("Texto que queremos3");
$ob1->grabar_datos("Texto que queremos4");

$ob1->pintar();

$ob2 = new General("Jose","Luis");

$ob2->grabar_datos("Texto que queremos");
$ob2->grabar_datos("Texto que queremos2");
$ob2->grabar_datos("Texto que queremos3");

$ob2->pintar();



?>
