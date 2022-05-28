<?php
include_once 'tamplate/header.php';
include_once 'tamplate/body.php';
?>


<form name="fromCadProduto" method="POST" action="">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Nome</label>
        <div class="col-sm-10">
            <input class="form-control" name="nomeProduto" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Descrição</label>
        <div class="col-sm-10">
            <input class="form-control" name="descricao" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Quantidade</label>
        <div class="col-sm-10">
            <input class="form-control" name="qtd" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Preço</label>
        <div class="col-sm-10">
            <input class="form-control" name="preco" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Marca</label>
        <div class="col-sm-10">
            <input class="form-control" name="marca" type="text">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Disponivel</label>
        <div class="col-sm-10">
            <input class="form-control" name="disponivel" type="text">
        </div>
    </div>

    <button class="btn btn-primary" type="submit" value="Cadastrar" name="cadProduto">Cadastrar</button>
</form>

<?php
require_once "model/db.php";
if (isset($_POST['cadProduto'])) {
    $nomeProduto = $_POST['nomeProduto'];
    $descricao = $_POST['descricao'];
    $qtd = $_POST['qtd'];
    $preco = $_POST['preco'];
    $marca = $_POST['marca'];
    $disponivel = $_POST['disponivel'];

    if ($descricao == "" || $qtd == "" || $preco == "" || $marca == "" || $disponivel == "" || $nomeProduto == "") {
        echo "<script>alert('Preencha todos os campos!');</script>";
    } else {
        $insertProduto = "INSERT INTO produtos (nomeProduto, descricao, quantidade, preco, marca, disponivel, delet) 
                            VALUES ('$nomeProduto','$descricao', '$qtd', '$preco', '$marca', '$disponivel', '')";
        if ($db->exec($insertProduto)) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar produto!";
        }
    }
}
?>

<?php
include_once 'tamplate/body2.php';
include_once 'tamplate/footer.php';
?>