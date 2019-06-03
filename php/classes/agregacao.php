<?php

require_once 'Produto_Agregacao.php';
require_once 'Cesta_Agregacao.php';

//criacao de objeto
$c1 = new Cesta_Agregacao;

//agregacao dos produtos
$c1 ->addItem($p1 = new Produto_Agregacao('Coalhada', 30, 5));
$c1 ->addItem($p2 = new Produto_Agregacao('Cuscuz', 120, 4.5));
$c1 ->addItem($p3 = new Produto_Agregacao('Café', 90, 5));

foreach ($c1->getItens() as $value) {
	print 'Item: '. $value->getDescricao() .'<br>';
}