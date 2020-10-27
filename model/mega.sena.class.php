<?php
class MegaSena {
  var $post = array();
  var $retorno = array();
  
  function __construct() {
  }
	
  function __destruct() {
  }
	
  function set($variavel, $valor){
	if(isset($valor)) $this->$variavel = $valor;
  }
	
  function get($variavel){
	return $this->$variavel;
  }

  function retornaMEGA(){
  	$status = true;
    $numerosdaSorte = [];
    while ($status == true) {
        $numero =  rand(1, 60);
        if (!in_array($numero, $numerosdaSorte)) {
            $numerosdaSorte[] = $numero;
        }
        if (count($numerosdaSorte) > 5) {
            $status = false;
        }
    }
    asort($numerosdaSorte);
    return $numerosdaSorte;
  } 
	

}
?>