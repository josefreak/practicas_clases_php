<?php

class Persona{
	
	private $nombre;
	private $gustos;
	
	function __construct($nom,$af1,$af2,$af3){//recogeremos 4 variables, $nom se usará en la clase Persona, pero las $af1 2 y 3 sera usados por la clase Aficiones
		
		$this->nombre = $nom;
		$this->gustos = new Aficiones($af1,$af2,$af3);//$la variable gustos sera un objeto de la clase Aficiones alos que tendremos que ponerles los argumentos
		
	}
	
	function imprimir(){
		
		echo $this->nombre;
		$this->gustos->imprimir();//Esto referencia a la clase Aficiones, asu funcion imprimir, no a su propia funcion imprimir, Ya que $gustos es un objeto de 	la clase Aficiones.
		
	}
	
}

class Aficiones{
	
	private $gusto1;
	private $gusto2;
	private $gusto3;
	
	function __construct($af1,$af2,$af3){//recogeremos las variables $af1 2 y 3 que introdujimos en el constructor de la clase Persona
		
		$this->gusto1 = $af1;
		$this->gusto2 = $af2;
		$this->gusto3 = $af3;	
		
	}
	function imprimir(){
		
		echo"{$this->gusto1}, {$this->gusto2}, {$this->gusto3}";
		
	}
	
	
}




?>
