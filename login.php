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

    $ab = is_array($row) ? count($row) : 0 ;
   if($ab > 0){
    echo "Usuário existe";
   }else{
     echo "Usuário não existe";
   }

    // while ($row = $result->fetchArray()) {
    //   $id = $row['id'];
    //   $email = $row['email'];
    //   $senha = $row['senha'];

    //   if ($dados['email'] == $email && $dados['senha'] == $senha) {
    //   } else {
    //     echo "<script> alert('Usuário ou senha incorretos');</script>";
    //   }

    //   var_dump("{$id} - {$email} - {$senha}");
    // }
  }
  ?>

  <form action="" method="POST">
    <input type="text" name="email" placeholder="nome">
    <input type="password" name="senha" placeholder="senha">
    <input type="submit" value="Login" name="SendLogin">
  </form>
</body>

</html>