<?php
/**
 * Class Produto_Agregacao
 */
class Produto_Agregacao{
	private $descricao;
	private $estoque;
	private $preco;
	private $fabricante;
	private $caracteristica;

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
	public function setFabricante(Fabricante_Associacao $f){
		$this -> fabricante = $f;
	}
	public function getFabricante(){
		return $this -> fabricante;
	}
	public function addCaracteristica($nome, $valor){
		$this -> caracteristica[] = new Caracteristicas_Composicao($nome, $valor);
	}
	public function getCaracteristicas(){
		return $this -> caracteristica;
	}
}