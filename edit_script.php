<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
<title>Alteração de dados</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
        <?php

        include "conexao.php";
        $id =$_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];

        //$sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";

        $sql = "UPDATE `pessoas` SET nome = '$nome', endereco = '$endereco', telefone = '$telefone', email = '$email', data_nascimento = '$data_nascimento' WHERE cod_pessoa = $id";

      if (mysqli_query($conn, $sql)) {
        mensagem("$nome está alterado", 'success');
      } else
      mensagem("$nome não está alterado", 'danger');
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