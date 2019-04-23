<?php

require_once 'Preferencias.php';

//obtém uma instância
$p1 = Preferencias::getInstance();

print 'A linguagem é: '. $p1 ->getData('language')."<br>";

$p2 = Preferencias::getInstance();
print 'A linguagem é: '. $p1 ->getData('language')."<br>";

$p2 ->setData('language', 'pt');
print 'A linguagem é: '. $p1 ->getData('language')."<br>";

//Descomentar para gravar o valor
$p2 -> save();