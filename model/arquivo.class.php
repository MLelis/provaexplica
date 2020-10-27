<?php
class Arquivo {
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

  private $arquivo = [];

  function retornoARQUIVO($arquivo){

  	$file = fopen($arquivo, "r");
    while (!feof($file)) {
        $this->arquivo[] = fgets($file);
    }
    fclose($file);
    
    return $this->arquivo;
  } 
	

}
?>