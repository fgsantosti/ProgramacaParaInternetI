<?php
/**
 * Class Produto
 */
class Produto{
	public $descricao;
	public $estoque;
	public $preco;

	public function setDescricao($descricao){
		if (is_string($descricao)) {
			$this -> descricao = $descricao;
		}
	}
	public function getDescricao(){
		return $this -> descricao;
	}
	public function setEstoque($estoque){
		if (is_numeric($estoque) and $estoque > 0) {
			$this -> estoque = $estoque;
		}
	}
	public function getEstoque(){
		return $this -> estoque;
	}
	public function setPreco($preco){
		if (is_numeric($preco) and $preco > 0) {
			$this -> preco = $preco;
		}
	}
	public function getPreco(){
		return $this -> preco;
	}
}

$p1 = new Produto;
$p1 -> setDescricao('Coalhada');
$p1 -> setEstoque(10);
$p1 -> setPreco(7);

print "O estoque de {$p1->getDescricao()} é {$p1->getEstoque()} <br>";
print "O preço de {$p1->getDescricao()} é {$p1->getPreco()} <br>";
