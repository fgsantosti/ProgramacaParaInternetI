<?php  
/**
 * Classe 
 */
class CategoriaDAO
{
	public function inserir_categoria($conn, $nome){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO categoria(nome) VALUES ('{$nome}')");
		if ($result) {
			echo "Categoria cadastrado com sucesso!";
		}
	}

	public function alterar_categoria($conn, $nome, $id){
		$result = $conn -> query("UPDATE categoria SET 
								nome = '{$nome}'
								WHERE idcategoria = '{$id}'");
		if ($result) {
			echo "Atualizado com sucesso!";
		}else{
			echo "Erro ao atualizar!";
		}	
	}

	public function listar_categorias($conn){
		$result = $conn -> query("SELECT * FROM categoria");
		return $result;
	}

	public function deletar_categoria($conn, $id){
		$result = $conn -> query("DELETE FROM categoria 
							WHERE idcategoria = '{$id}'");
		if($result){
			$msg = "Deletado com sucesso!";
			header("Location: listar_categorias.php?msg=$msg");
		}else{
			$msg_erro = "Erro ao deletar.";
			header("Location: listar_categorias.php?msg_erro=$msg_erro");
		}
	}
}

?>