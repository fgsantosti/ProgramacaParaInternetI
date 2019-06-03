<?php  
class Categoria{
	private $nome;

	public function setNome($nome){
		if (is_string($nome)) {
			$this -> nome = $nome;
		}
	}
	public function getNome(){
		return $this -> nome;
	}
}
?>