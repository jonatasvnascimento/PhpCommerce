<?php
include_once 'tamplateHome\header.php';
include_once 'tamplateHome\body.php';
?>

<?php
include_once "model/db.php";
?>

<?php
$selectUsuarios = "SELECT * FROM produtos order by id asc";
$result = $db->query($selectUsuarios);

while ($row = $result->fetchArray()) {
  // echo "<tbody>";
  // echo "<tr>";
  // echo "<td>{$row['id']}</td>";
  // echo "<td>{$row['descricao']}</td>";
  // echo "<td>{$row['quantidade']}</td>";
  // echo "<td>{$row['preco']}</td>";
  // echo "<td>{$row['marca']}</td>";
  // echo "</tr>";
  // echo "</tbody>";

?>

  <div class="card" style="width: 18rem;">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>
    <div class="card-body">
      <h5 class="card-title"><?php $row['descricao']?></h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

<?php
}
?>



<?php
include_once 'tamplateHome\body2.php';
include_once 'tamplateHome\footer.php';
?>