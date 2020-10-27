<?php

if($_POST['enviarArquivo'] == 'true'){

	$arquivo = new Arquivo();
	$retornaARQUIVO = $arquivo->retornoARQUIVO($_FILES['arquivo']['tmp_name']);
	
}

include('views/'.'arquivo.php');