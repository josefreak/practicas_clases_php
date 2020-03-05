<?php

class Persona_array{
	
	private $nombre;
	private $gustos;
	
	function __construct($nom,$af1){//recogeremos 2 variables, $nom se usará en la clase Persona, $af1 sera un array con tres datos
		
		$this->nombre = $nom;
		$this->gustos = new Aficiones_array($af1);//$la variable gustos sera un objeto de la clase Aficiones a los que tendremos que ponerles los argumentos
		
	}
	
	function imprimir(){
		
		echo $this->nombre;
		$this->gustos->imprimir();//Esto referencia a la clase Aficiones, a su funcion imprimir, no a su propia funcion imprimir, Ya que $gustos es un objeto de 	la clase Aficiones.
		
	}
	
}

class Aficiones_array{
	
	private $gusto1;
	private $gusto2;
	private $gusto3;
	
	function __construct($af1){//recogeremos el array que introdujimos en el constructor de la clase Persona y le sacamos los datos
		
		$this->gusto1 = $af1[0];
		$this->gusto2 = $af1[1];
		$this->gusto3 = $af1[2];	
		
	}
	function imprimir(){
		
		echo"{$this->gusto1}, {$this->gusto2}, {$this->gusto3}";
		
	}
	
	
}




?>
