<?php

$megasena = new MegaSena();
$sorteio01 = $megasena->retornaMEGA();
$sorteio02 = $megasena->retornaMEGA();
$sorteio03 = $megasena->retornaMEGA();

include('views/'.'mega.sena.php');