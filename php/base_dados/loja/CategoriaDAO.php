<?php  
/**
 * Classe 
 */
class CategoriaDAO
{
	public function inserir_categoria($conn, $nome)
	{
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO categoria(nome) VALUES ('{$nome}')");
		if ($result) {
			echo "Categoria cadastrado com sucesso!";
		}
	}
	public function alterar_categoria($conn, $nome, $id)
	{
		$result = $conn -> query("UPDATE categoria SET 
								nome = '{$nome}'
								WHERE idcategoria = '{$id}'");
		if ($result) {
			echo "Atualizado com sucesso!";
		}else{
			echo "Erro ao atualizar!";
		}	
	}
}

?>