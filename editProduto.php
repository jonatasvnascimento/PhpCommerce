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

    $selectProdutos = "SELECT * FROM produtos where id = {$_GET['id']}";
    $result = $db->query($selectProdutos);

    while ($row = $result->fetchArray()) {
    ?>
</div>


<form name="fromAtualizaProd" method="POST" action="">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Nome</label>
        <div class="col-sm-10">
            <input class="form-control" name="nomeProduto" type="text" value="<?php echo "{$row['nomeProduto']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Descrição</label>
        <div class="col-sm-10">
            <input class="form-control" name="descricao" type="text" value="<?php echo "{$row['descricao']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Quantidade</label>
        <div class="col-sm-10">
            <input class="form-control" name="quantidade" type="text" value="<?php echo "{$row['quantidade']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Preço</label>
        <div class="col-sm-10">
            <input class="form-control" name="preco" type="text" value="<?php echo "{$row['preco']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Marca</label>
        <div class="col-sm-10">
            <input class="form-control" name="marca" type="text" value="<?php echo "{$row['marca']}"; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Disponivel</label>
        <div class="col-sm-10">
            <input class="form-control" name="disponivel" type="text" value="<?php echo "{$row['disponivel']}"; ?>">
        </div>
    </div>


    <button class="btn btn-primary" type="submit" value="Cadastrar" name="salveProduto">Salvar</button>
    <button class="btn btn-danger" type="submit" value="Deletar" name="delProduto">Deletar</button>
    <button class="btn btn-success " type="submit" value="Ativar" name="ativProduto">Ativar</button>

</form>
<?php
    }

    if (isset($_POST['salveProduto'])) {
        
        $nomeProduto = $_POST['nomeProduto'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $marca = $_POST['marca'];
        $disponivel = $_POST['disponivel'];

        if ($descricao == "" || $quantidade == "" || $preco == "" || $marca == "" || $disponivel == "" || $nomeProduto == "") {
            echo "<script> alert('Preencha todos os campos');</script>";
        } else {
            $updateProduto = "UPDATE produtos SET nomeProduto = '$nomeProduto', descricao = '$descricao', quantidade = '$quantidade', preco = '$preco', marca = '$marca', disponivel = '$disponivel' WHERE id = {$_GET['id']}";

            if ($db->exec($updateProduto)) {
                echo "Produto Atualizado com sucesso!";
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Erro ao Produto usuário!";
            }
        }
    }

    if (isset($_POST['delProduto'])) {

        $insertUsuario = "UPDATE produtos SET delet = '*', disponivel = 0 WHERE id = {$_GET['id']}";

        if ($db->exec($insertUsuario)) {
            echo "Produto Deletado com sucesso com sucesso!";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Erro ao Produto usuário!";
        }
    }

    if (isset($_POST['ativProduto'])) {

        $insertUsuario = "UPDATE produtos SET delet = '', disponivel = 1 WHERE id = {$_GET['id']}";

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