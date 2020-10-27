<?php
session_start();



include("includes/config.php");
include($_SERVER["DOCUMENT_ROOT"]."includes/url.php");


include($_SERVER["DOCUMENT_ROOT"]."model/api.class.php");
include($_SERVER["DOCUMENT_ROOT"]."model/arquivo.class.php");
include($_SERVER["DOCUMENT_ROOT"]."model/mega.sena.class.php");


if($urlreservada[$url[$urlInicioConfig]]){
  include($_SERVER["DOCUMENT_ROOT"]."controller/".$urlreservada[$url[$urlInicioConfig]]);
} else {
  include($_SERVER["DOCUMENT_ROOT"]."controller/index.php");
}

?>