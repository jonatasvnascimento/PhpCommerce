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
$idUsuario = $_GET(['id']);

$flagDelet = "UPDATE usuarios SET delet = '*' WHERE id = {$idUsuario}";

if ($db->exec($flagDelet)) {
    echo "Usuário Atualizado com sucesso!";
} else {
    echo "Erro ao Atualizar usuário!";
}

?>

<?php
include_once 'tamplate/body2.php';
include_once 'tamplate/footer.php';
?>