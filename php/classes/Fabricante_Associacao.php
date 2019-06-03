<?php
/**
 * Class Fabricante_Associacao
 */
class Fabricante_Associacao{
	private $nome;
	private $endereco;
	private $cnpj;
	private $documento;
	public function __construct($nome, $endereco, $cnpj, $documento ){
		$this -> nome = $nome;
		$this -> endereco = $endereco;
		$this -> cnpj = $cnpj;
		$this -> documento = $documento;
	}
	public function getNome(){
		return $this -> nome;
	}
}