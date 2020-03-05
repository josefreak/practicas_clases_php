<?php

class General{//esta clase general alberga 3 objetos (new Clase1, 2 y 3)
	
	private $propiedad1;//propiedades de la clase general
	private $propiedad2;
	private $propiedad3;
	
	function __construct($pal1,$pal2){//incluimos dos variables para enviarlas a los objetos que llamamos desde la clase general
		
		$this->propiedad1 = new Clase1($pal1);//propiedades de la clase general que son objetos de otras clases
		$this->propiedad2 = new Clase2($pal2);
		$this->propiedad3 = new Clase3;	
		
	}
	
	function grabar_datos($textoarray){
		
		$this->propiedad3->Grabar_datos($textoarray);//enviamos a la funcion de la clase3 grabar_datos
		
	}
	
	function pintar(){
		
		$this->propiedad1->pintar();//es un objeto de la clase1
		$this->propiedad2->pintar();//es un objeto de la clase2
		$this->propiedad3->pintar();//es un objeto de la clase3
		
	}
	
}

class Clase1{
	
	private $proc1;//propiedad de la clase clase1
	
	
	function __construct($pal1){//usamos el constructor con la variable enviada desde la clase general
		
		$this->proc1=$pal1;// la propiedad de la clase1 ahora sera igual a la variable enviada desde la clase general
		
	}
	
	function pintar(){
		
		echo"{$this->proc1}";
		
	}
	
}

class Clase2{
	
	private $proc2;//propiedad de la clase clase2
	
	function __construct($pal2){
		
		$this->proc2=$pal2;	// la propiedad de la clase2 ahora sera igual a la variable enviada desde la clase general
		
	}
	
	function pintar(){
		
		echo"{$this->proc2}";
		
	}
	
	
}

class Clase3{
	
	private $datos = array();//propiedad de la clase clase2 que esta vez será un array
	
	function grabar_datos($textoarray){//Esta funcion funciona con la variable $textoarray que enviamos desde la clase general
		
		$this->datos[]=$textoarray;//introducimos esa variable en un array
		
	}
	
	function pintar(){
		
		$elementos = count($this->datos);
		
		for($i=0;$i<$elementos;$i++){
		
			echo"{$this->datos[$i]}<br>";
		
		}
		
		
	}
	
	
}

?>
