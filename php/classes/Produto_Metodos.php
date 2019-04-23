<?php
/**
 * Class Produto
 */
class Produto_Metodos{
	public $descricao;
	public $estoque;
	public $preco;

	public function aumentarEstoque($unidades){
		if (is_int($unidades) and $unidades > 0) {
			$this -> estoque += $unidades;
		}
	}
	public function diminuirEstoque($unidades){
		if (is_int($unidades) and $unidades > 0) {
			$this -> estoque -= $unidades;
		}
	}
	public function reajustarPreco($percentual){
		if (is_int($percentual) and $percentual > 0) {
			$this -> preco *= (1 + ($percentual/100));
		}
	}
}

$p1 = new Produto;
$p1 -> descricao = 'Rapadura';
$p1 -> estoque = 40;
$p1 -> preco = 10;
print "O estoque de {$p1->descricao} é {$p1->estoque} <br>";
print "O preço de {$p1->descricao} é {$p1->preco} <br>";

$p1 -> aumentarEstoque(10);
$p1 -> diminuirEstoque(5);
$p1 -> reajustarPreco(5);
print "O estoque de {$p1->descricao} é {$p1->estoque} <br>";
print "O preço de {$p1->descricao} é {$p1->preco} <br>";
