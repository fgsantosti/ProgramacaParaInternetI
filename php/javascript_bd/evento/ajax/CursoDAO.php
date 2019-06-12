<?php
/**
 * Classe Curso
 */
class CursoDAO{

	public function listar_cursos($conn){
		//executa uma instrução SQL de consulta
		$result = $conn -> query("SELECT idcurso, nome, descricao FROM curso");
		return $result;

	}

}

	



