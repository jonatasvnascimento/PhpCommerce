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
    } else {
        echo "Erro ao cadastrar usuário!";
    }
}
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Ativo</th>
            <th scope="col">Admin</th>
            <th scope="col">Deletado</th>
            <th scope="col" class="">Ação</th>
        </tr>
    </thead>

    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
    <?php
    $selectUsuarios = "SELECT * FROM usuarios order by id asc";
    $result = $db->query($selectUsuarios);

    while ($row = $result->fetchArray()) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['senha']}</td>";

        if ($row['ativo'] == 1) {
            echo "<td>Sim</td>";
        } else {
            echo "<td>Não</td>";
        }

        if ($row['isAdmin'] == 1) {
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
                    <a href='editUsuario.php?id={$row['id']}'> 
                    <button class='btn btn-success rounded-pill' type='button'>
                        <i class='fa-solid fa-magnifying-glass'></i>
                    </button>
                </a>
                </td>";
        echo "</tr>";
        echo "</tbody>";
    }
    ?>
</table>

<?php
include_once 'tamplate/body2.php';
include_once 'tamplate/footer.php';
?>