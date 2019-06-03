<?php

require_once 'Produto_Associacao.php';
require_once 'Fabricante_Associacao.php';

//criação de objeto
$p1 = new Produto_Associacao('Coalhada', 10, 5);
$f1 = new Fabricante_Associacao('Fazenda Renovada', 'Nova Corrente', '987654321', '123498765');

//associação
$p1 -> setFabricante($f1);

print 'A descricao é: '. $p1->getDescricao().'<br>';
print 'O fabricante é: '. $p1->getFabricante()->getNome().'<br>';