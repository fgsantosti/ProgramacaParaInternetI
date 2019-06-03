<?php
/**
 * Class Produto_Associacao
 */
class Produto_Associacao{
	private $descricao;
	private $estoque;
	private $preco;
	private $fabricante;

	public function __construct($descricao, $estoque, $preco){
		$this -> descricao = $descricao;
		$this -> estoque = $estoque;
		$this -> preco = $preco;
	}
	public function setDescricao($descricao){
		if (is_string($descricao)) {
			$this -> descricao = $descricao;
		}
	}
	public function getDescricao(){
		return $this -> descricao;
	}
	public function setEstoque($estoque){
		if (is_int($estoque) and $estoque > 0) {
			$this -> estoque = $estoque;
		}
	}
	public function getEstoque(){
		return $this -> estoque;
	}
	public function setPreco($preco){
		if (is_float($preco) and $preco > 0) {
			$this -> preco = $preco;
		}
	}
	public function getPreco(){
		return $this -> preco;
	}
	public function setFabricante(Fabricante_Associacao $f){
		$this -> fabricante = $f;
	}
	public function getFabricante(){
		return $this -> fabricante;
	}
}