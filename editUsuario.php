<?php
if (!isset($_SESSION)) {
    session_start();
}
ob_start();
if (!isset($_SESSION['id']) && !isset($_SESSION['nome']) && !isset($_SESSION['email'])) {
    header("Location: index.php");
}
?>

<?php
include_once 'tamplate/header.php';
include_once 'tamplate/body.php';
?>

<div class="Content">
    <?php
    require_once "model/db.php";

    $selectUsuarios = "SELECT * FROM usuarios where id = {$_GET['id']}";
    $result = $db->query($selectUsuarios);

    while ($row = $result->fetchArray()) {
    ?>
</div>


<form name="fromCadProduto" method="POST" action="">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Nome</label>
        <div class="col-sm-10">
            <input class="form-control" name="name" type="text" value="<?php echo "{$row['nome']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Email</label>
        <div class="col-sm-10">
            <input class="form-control" name="email" type="text" value="<?php echo "{$row['email']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Senha</label>
        <div class="col-sm-10">
            <input class="form-control" name="senha" type="text" value="<?php echo "{$row['senha']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Ativo</label>
        <div class="col-sm-10">
            <input class="form-control" name="isAtivo" type="text" value="<?php echo "{$row['ativo']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Admin</label>
        <div class="col-sm-10">
            <input class="form-control" name="isAdmin" type="text" value="<?php echo "{$row['isAdmin']}"; ?>">
        </div>
    </div>

    <button class="btn btn-primary" type="submit" value="Cadastrar" name="cadUsuario">Salvar</button>
    <button class="btn btn-danger" type="submit" value="Deletar" name="delUsuario">Deletar</button>
    <button class="btn btn-success " type="submit" value="Ativar" name="ativUsuario">Ativar</button>

</form>
<?php
    }

    if (isset($_POST['cadUsuario'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $isAtivo = $_POST['isAtivo'];
        $isAdmin = $_POST['isAdmin'];

        if ($name == "" || $email == "" || $senha == "" || $isAtivo == "" || $isAdmin == "") {
            echo "<script> alert('Preencha todos os campos');</script>";
        } else {
            $insertUsuario = "UPDATE usuarios SET nome = '$name', email = '$email', senha = '$senha', ativo = '$isAtivo', isAdmin = '$isAdmin' WHERE id = {$_GET['id']}";

            if ($db->exec($insertUsuario)) {
                echo "Usuário Atualizado com sucesso!";
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Erro ao Atualizar usuário!";
            }
        }
    }

    if (isset($_POST['delUsuario'])) {

        $insertUsuario = "UPDATE usuarios SET delet = '*', ativo = 0 WHERE id = {$_GET['id']}";

        if ($db->exec($insertUsuario)) {
            echo "Usuário Deletado com sucesso com sucesso!";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Erro ao Atualizar usuário!";
        }
    }

    if (isset($_POST['ativUsuario'])) {

        $insertUsuario = "UPDATE usuarios SET delet = '', ativo = 1 WHERE id = {$_GET['id']}";

        if ($db->exec($insertUsuario)) {
            echo "Usuário Ativado com sucesso com sucesso!";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Erro ao Ativar usuário!";
        }
    }
?>

<?php
include_once 'tamplate/body2.php';
include_once 'tamplate/footer.php';
?>