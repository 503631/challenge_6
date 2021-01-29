<?php


$sql = "SELECT * FROM autos_test where id >= 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach($result as $key => $row) {

    $id = $row['id'];
    $naam = $row['naam'];
    $img = $row['foto'];
    $merken = $row['merken'];

    include("template.php");

}
?>