<?php
include_once 'tamplate/header.php';
include_once 'tamplate/body.php';
?>


<form name="fromCadProduto" method="POST" action="">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Nome</label>
        <div class="col-sm-10">
            <input class="form-control" name="name" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Email</label>
        <div class="col-sm-10">
            <input class="form-control" name="email" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Senha</label>
        <div class="col-sm-10">
            <input class="form-control" name="senha" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Ativo</label>
        <div class="col-sm-10">
            <input class="form-control" name="isAtivo" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Admin</label>
        <div class="col-sm-10">
            <input class="form-control" name="isAdmin" type="text">
        </div>
    </div>

    <button class="btn btn-primary" type="submit" value="Cadastrar" name="cadUsuario">Cadastrar</button>
</form>
<?php
require_once "model/db.php";
if (isset($_POST['cadUsuario'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $isAtivo = $_POST['isAtivo'];
    $isAdmin = $_POST['isAdmin'];

    if ($name == "" || $email == "" || $senha == "" || $isAtivo == "" || $isAdmin == "") {
        echo "<script> alert('Preencha todos os campos');</script>";
    } else {
        $insertUsuario = "INSERT INTO usuarios (nome, email, senha, ativo, isAdmin) VALUES ('$name', '$email', '$senha', '$isAtivo', '$isAdmin', '')";

        if ($db->exec($insertUsuario)) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário!";
        }
    }
    //  echo "{$name} - {$email} - {$senha} - {$isAtivo} - {$isAdmin}";
}

?>


<?php
include_once 'tamplate/body2.php';
include_once 'tamplate/footer.php';
?>
