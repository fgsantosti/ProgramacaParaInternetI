
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>  
    <script>
    function buscar_minicursos(){
      var curso = $('#curso').val();
      if(curso){
        var url = 'buscar_minicursos.php?curso='+curso;
        $.get(url, function(dataReturn) {
          $('#load_minicursos').html(dataReturn);
        });
      }
    }
    </script>
  </head>
  <body style="font-size: 12px; font-family: 'Arial'">
    <h2>Exemplo para carregar curso/minicurso por JQuery</h2>
    <form action="resp.php" method="post">
      <div>
      <label>Curso:</label>
      <select name="curso" id="curso" onchange="buscar_minicursos()">
        <option value="">Selecione o curso:</option>
        <?php
        require_once 'CursoDAO.php';
        require_once 'conn.php';
        $lcurso = new CursoDAO(); 
        $result = $lcurso -> listar_cursos($conn);

        if ($result) {
          //percorre os resultados via iteração
          foreach ($result as $key => $row) {
            //exibe os resultados
            $row['nome'] = utf8_encode($row['nome']);
            echo "<option value='{$row['idcurso'] }'>{$row['nome']}</option>";
          }
        }
        ?>
      </select>
      </div>
      <div id="load_minicursos">
        <label>Minicurso:</label>
        <select name="minicurso" id="minicurso">
          <option value="">Selecione o minicurso</option>
          
        </select>
      </div>
      <input type="submit" name="Enviar">
    </form>
  </body>
</html>