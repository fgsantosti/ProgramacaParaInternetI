<?php

require_once 'Produto_Composicao.php';
require_once 'Caracteristicas_Composicao.php';

//criação dos objetos
$p1 = new Produto_Composicao('Cuscuz', 30, 4.5);

//composição
$p1 -> addCaracteristica('Cor', 'Amarelo');
$p1 -> addCaracteristica('Valor Nutritivo', '113.5kcal/100g');
$p1 -> addCaracteristica('Carboidratos', '25,3g/100g');

print 'Produto: '. $p1->getDescricao() .'<br>';
foreach ($p1 -> getCaracteristicas() as $value) {
	print 'Caracteristica: ' . $value->getNome() . ' - ' . $value->getValor() .'<br>';
}