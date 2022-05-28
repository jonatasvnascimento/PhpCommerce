<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Login</p>
  <?php

  include_once "model/db.php";

  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


  if (!empty($dados['SendLogin'])) {
    echo "<pre>";
    var_dump($dados);
    echo "</pre>";

    $selectUsuarios = "SELECT id, email, senha FROM usuarios where nome = '{$dados['email']}' limit 1";
    $result = $db->query($selectUsuarios);
    $row = $result->fetchArray();
    $ab = is_array($row) ? count($row) : 0;
    
    if ($ab > 0) {
      if (password_verify($dados['senha'], $row['senha'])) {
        echo "Login efetuado com sucesso!";
      }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário ou Senha invalidos</p>";
      }
    } else {
      $_SESSION['msg'] = "<p style='color:red;'>Usuário ou Senha invalidos</p>";
    }
  }

  if (!empty($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  ?>

  <form action="" method="POST">
    <input type="text" name="email" placeholder="nome">
    <input type="password" name="senha" placeholder="senha">
    <input type="submit" value="Login" name="SendLogin">
  </form>
</body>

</html>