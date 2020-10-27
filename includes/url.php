<?php

$url = strip_tags($_SERVER["REQUEST_URI"]); // USAR ESSE OU O OUTRO
$get_array = explode("?",$url); 
$url = explode("/",$get_array[0]);
array_shift($url);
$urlreservada = array();

//MENU

$urlreservada["home"] = "index.php";
$urlreservada["api"] = "api.php";
$urlreservada["mega-sena"] = "mega.sena.php";
$urlreservada["arquivo"] = "arquivo.php";