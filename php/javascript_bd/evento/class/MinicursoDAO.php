<?php

/**
 * 
 */
class MinicursoDAO{
	
	public function listar_minicursos($conn){
		//executa uma instrução SQL de consulta
		$result = $conn -> query("SELECT idcurso, nome, descricao FROM curso");
		return $result;
	}

	public function listar_minicurso_id($conn, $id){
		//executa uma instrução SQL de consulta
		$result = $conn -> query("SELECT * FROM minicurso 
									WHERE idcurso='{$id}' ");
		return $result;

	}
}