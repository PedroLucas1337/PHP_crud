<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">


<title>Alteração</title>
  </head>
  <body>

  <?php
  include "conexao.php";
  $id = $_GET['id'] ?? '';
  $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";
  
  $dados = mysqli_query($conn, $sql);
   $linha = mysqli_fetch_assoc($dados);
  ?>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>cadastro</h1>
            <form action="edit_script.php" method="POST">
            <div class="form-group">
    <label for="nome">Nome Completo</label>
    <input type="text" class="form-control" name="nome" placeholder="NOME" required value = "<?php echo $linha['nome'];?>">
  </div>
  <br>
           <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" placeholder="ENDEREÇO" value = "<?php echo $linha['endereco'];?>">
  </div>
  <br>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" placeholder="TELEFONE" value = "<?php echo $linha['telefone'];?>">
  </div>
  <br>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="EMAIL" value = "<?php echo $linha['email'];?>">
  </div>
  <br>
  <div class="form-group">
    <label for="data_nascimento">Data de nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" placeholder="/_/_/" value = "<?php echo $linha['data_nascimento'];?>">
  </div>
  <br>
  <div class="form-group">
    <input type="submit" class="btn btn-success" value = "salvar alterações">
    <input type= "hidden" name="id" value ="<?php echo $linha['cod_pessoa']?>">
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