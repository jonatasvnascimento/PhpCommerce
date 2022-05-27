<?php
include_once "model/db.php";
if (isset($_POST['submit'])) {
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $ativo = 1;
  $isAdmin = 0;
  $insertUsuario = "INSERT INTO usuarios (nome, email, senha, ativo, isAdmin) VALUES ('$nome', '$email', '$senha', '$ativo', '$isAdmin')";

  if ($db->exec($insertUsuario)) {
    echo "Usuário cadastrado com sucesso!";
  }else{
    echo "Erro ao cadastrar usuário!";
  }
}
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
  <form action="" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="senha" placeholder="senha">
    <input type="submit" name="submit" value="submit">
  </form>

  <?php
    $selectUsuarios = "SELECT * FROM usuarios order by id desc";
    $result = $db->query($selectUsuarios);

    while ($row = $result -> fetchArray()){
        echo "{$row['nome']} - {$row['email']} - {$row['senha']} - {$row['ativo']} - {$row['isAdmin']} <br>";
    }
  ?>
</body>

</html>