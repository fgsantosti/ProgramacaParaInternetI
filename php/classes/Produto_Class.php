<?php
/**
 * Class Produto
 */
class Produto{
	public $descricao;
	public $estoque;
	public $preco;
}

$p1 = new Produto;
$p1 -> descricao = 'Rapadura';
$p1 -> estoque = 40;
$p1 -> preco = 10;

$p2 = new Produto;
$p2 -> descricao = 'Café';
$p2 -> estoque = 100;
$p2 -> preco = 4;

//Objeto inteiro
var_dump($p1);
echo '<br>';
var_dump($p2);
echo '<br>';

echo "O produto é : {$p1 -> descricao}";
echo 'O produto é : '. $p1 -> descricao;


