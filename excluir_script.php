<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
<title>Exclusão de dados</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
        <?php

        include "conexao.php";
        $id =$_POST['id'];
        $nome = $_POST['nome'];
        
        $sql = "DELETE from `pessoas` WHERE cod_pessoa = $id";

      if (mysqli_query($conn, $sql)) {
        mensagem("$nome está excluido", 'success');
      } else
      mensagem("$nome não está excluido", 'danger');
         ?>

         <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>