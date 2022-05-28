<?php
include_once 'tamplate/header.php';
include_once 'tamplate/body.php';
?>

<div class="Content">
    <?php
    require_once "model/db.php";

    $selectUsuarios = "SELECT * FROM produtos where id = {$_GET['id']}";
    $result = $db->query($selectUsuarios);

    while ($row = $result->fetchArray()) {
    ?>
</div>


<form name="fromCadProduto" method="POST" action="">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Descrição</label>
        <div class="col-sm-10">
            <input class="form-control" name="name" type="text" value="<?php echo "{$row['descricao']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Quantidade</label>
        <div class="col-sm-10">
            <input class="form-control" name="email" type="text" value="<?php echo "{$row['quantidade']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Marca</label>
        <div class="col-sm-10">
            <input class="form-control" name="senha" type="text" value="<?php echo "{$row['preco']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Disponivel</label>
        <div class="col-sm-10">
            <input class="form-control" name="isAtivo" type="text" value="<?php echo "{$row['marca']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Deletado</label>
        <div class="col-sm-10">
            <input class="form-control" name="isAdmin" type="text" value="<?php echo "{$row['disponivel']}"; ?>">
        </div>
    </div>
    

    <button class="btn btn-primary" type="submit" value="Cadastrar" name="salveProduto">Salvar</button>
    <button class="btn btn-danger" type="submit" value="Deletar" name="delProduto">Deletar</button>
    <button class="btn btn-success " type="submit" value="Ativar" name="ativProduto">Ativar</button>

</form>
<?php
    }

    if (isset($_POST['salveProduto'])) {

        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $marca = $_POST['marca'];
        $disponivel = $_POST['disponivel'];

        if ($name == "" || $email == "" || $senha == "" || $isAtivo == "" || $isAdmin == "") {
            echo "<script> alert('Preencha todos os campos');</script>";
        } else {
            $updateProduto = "UPDATE produtos SET descricao = '$descricao', quantidade = '$quantidade', preco = '$preco', marca = '$marca', disponivel = '$disponivel' WHERE id = {$_GET['id']}";

            if ($db->exec($insertUsuario)) {
                echo "Produto Atualizado com sucesso!";
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Erro ao Produto usuário!";
            }
        }
    }

    if (isset($_POST['delProduto'])) {

        $insertUsuario = "UPDATE produtos SET delet = '*' WHERE id = {$_GET['id']}";

        if ($db->exec($insertUsuario)) {
            echo "Produto Deletado com sucesso com sucesso!";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Erro ao Produto usuário!";
        }
    }

    if (isset($_POST['ativProduto'])) {

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