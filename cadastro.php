<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
<title>oi</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>cadastro</h1>
            <form action="cadastro_script.php" method="POST">
            <div class="form-group">
    <label for="nome">Nome Completo</label>
    <input type="text" class="form-control" name="nome" placeholder="NOME" required>
  </div>
  <br>
           <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" placeholder="ENDEREÇO">
  </div>
  <br>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" placeholder="TELEFONE">
  </div>
  <br>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="EMAIL">
  </div>
  <br>
  <div class="form-group">
    <label for="dt_nascimento">Data de nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" placeholder="/_/_/">
    <br>
    <div class="form-group">
    <label for="foto">Foto</label>
  </div>
  <br>
  <div class="form-group">
    <input type="submit" class="btn btn-success">
  </div>
            </form>
            <br>
            <a href="index.php" class="btn btn-info">Voltar ao início</a>
            </div>
        </div>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>