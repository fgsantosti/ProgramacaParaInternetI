
<!DOCTYPE html>

<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sistema de Login</title>
  </head>
  <body>
    <div class="container">
      <?php
        if(isset($erro))
          echo $erro;
      ?>
      <h1>Login</h1>
      <form class="form-group" method="post" action="login.php">
        <label>Usuário</label>
        <input class="form-control" type="text" name="usuario">
        <label>Senha</label>
        <input class="form-control" type="password" name="senha">
        <br>
        <button class="btn btn-primary">Logar</button>
      </form>
    </div>
  </body>
</html>