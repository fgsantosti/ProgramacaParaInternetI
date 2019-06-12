<?php

$id = $_GET["curso"];
//$id = 2;

require_once 'conn.php';
require_once 'MinicursoDAO.php';

$lminicurso = new MinicursoDAO(); 
$result = $lminicurso -> listar_minicurso_id($conn, $id);

?>

<label>Minicurso:</label>
<select name="minicurso" id="minicurso">
  <?php foreach($result as $key => $row){
    echo "<option value='{$row['idminicurso'] }'>{$row['nome']}</option>";
  }
?>
</select>