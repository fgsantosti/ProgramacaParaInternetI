<!DOCTYPE html>
<html>
<head>
<script>
function buscar_minicursos(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "listar_minicursos.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

  <form>
    <?php
      require_once 'CursoDAO.php';
      require_once 'conn.php';
      $lcurso = new CursoDAO(); 
      $result = $lcurso -> listar_cursos($conn);
    ?>
    <label>Curso:</label>
    <select name="users" onchange="buscar_minicursos(this.value)">
      <option value="">Selecione o Curso:</option>
      <?php
        if ($result) {
          //percorre os resultados via iteração
          while($row = $result->fetch(PDO::FETCH_OBJ)){
            echo '<option value='.$row ->idcurso.'>'.utf8_encode($row->nome).'</option>';
          }
        }
      ?>

    </select>
    <div id="txtHint"><b>Curso ainda não foi escolhido</b></div>

  </form>
<br>

</body>
</html>