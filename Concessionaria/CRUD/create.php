<?php include "./mysql_connect.php"; 

$Marca = $_POST['marca'];
$Ano = $_POST['ano'];
$Modelo = $_POST['modelo'];
$Foto = $_POST['foto'];
$Descricao = $_POST['descricao'];
$Preco = $_POST['preco'];
$Cor = $_POST['cor'];

$query = $con->query("INSERT INTO carro (Marca,  Modelo, Foto,  Descricao, Ano, Preco, Cor)  VALUES ('$Marca', '$Modelo', '$Foto', '$Descricao', {$Ano}, {$Preco}, '$Cor')");
header("Location: ../listagem.php");
die();
?>