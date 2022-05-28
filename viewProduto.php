<?php
include_once 'tamplate/header.php';
include_once 'tamplate/body.php';
?>
<?php
include_once "model/db.php";
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço</th>
            <th scope="col">Marca</th>
            <th scope="col">Disponivel</th>
            <th scope="col">Deletado</th>
            <th scope="col">Ação</th>

        </tr>
    </thead>
    <?php
    $selectUsuarios = "SELECT * FROM produtos order by id asc";
    $result = $db->query($selectUsuarios);

    while ($row = $result->fetchArray()) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nomeProduto']}</td>";
        echo "<td>{$row['descricao']}</td>";
        echo "<td>{$row['quantidade']}</td>";
        echo "<td>{$row['preco']}</td>";
        echo "<td>{$row['marca']}</td>";

        if ($row['disponivel'] == 1) {
            echo "<td>Sim</td>";
        } else {
            echo "<td>Não</td>";
        }
        if ($row['delet'] == '*') {
            echo "<td>Sim</td>";
        } else {
            echo "<td>Não</td>";
        }

        echo "  <td>
                    <a href='editProduto.php?id={$row['id']}'> 
                        <button class='btn btn-success rounded-pill' type='button'>
                            <i class='fa-solid fa-magnifying-glass'></i>
                        </button>
                    </a>
                </td>";
        echo "</tr>";

        echo "</tr>";
        echo "</tbody>";
    }
    ?>
</table>
<?php
include_once 'tamplate/body2.php';
include_once 'tamplate/footer.php';
?>