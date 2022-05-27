<?php
$db = new PDO('sqlite:dadosluz.db');

$result = $db->query("select * from company");
$rows = $result -> fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($rows);
echo "<pre>";

?>