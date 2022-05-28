<?php
include_once 'tamplate/header.php';
include_once 'tamplate/body.php';
?>


<form name="fromCadProduto" method="POST" action="">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="inlineFormInputGroupUsername">Descrição</label>
        <div class="col-sm-10">
            <input class="form-control" name="desc" type="text">
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
    $desc = $_POST['desc'];
    $qtd = $_POST['qtd'];
    $preco = $_POST['preco'];
    $marca = $_POST['marca'];
    $disponivel = $_POST['disponivel'];

    if ($desc == "" || $qtd == "" || $preco == "" || $marca == "" || $disponivel == "") {
        echo "<script>alert('Preencha todos os campos!');</script>";
    } else {
        $insertProduto = "INSERT INTO produtos (descricao, quantidade, preco, marca, disponivel) VALUES ('$desc', '$qtd', '$preco', '$marca', '$disponivel')";
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
