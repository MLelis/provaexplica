<?php
class Api {
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

  function retornoAPI(){
  	$curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://randomuser.me/api");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $resultado = curl_exec($curl);
        curl_close($curl);
        
        return json_decode($resultado, 1);
  } 
	

}
?>