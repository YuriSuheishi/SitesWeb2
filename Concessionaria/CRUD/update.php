<?php include "./mysql_connect.php"; ?>
<?php

if (isset($_POST['id']) && !empty($_POST['id'])) {
$idUpdate = $_POST['id'];
$Marca = $_POST['marca'];
$Ano = $_POST['ano'];
$Modelo = $_POST['modelo'];
$Foto = $_POST['foto'];
$Descricao = $_POST['descricao'];
$Preco = $_POST['preco'];
$Cor = $_POST['cor'];

$queryUpdate = sprintf("UPDATE Carro SET Marca=\"{$Marca}\", Ano=\"{$Ano}\", Modelo=\"{$Modelo}\", Foto=\"{$Foto}\", Descricao=\"{$idUpdate}\",
Preco=\"{$Preco}\", Descricao=\"{$Descricao} \",  Cor=\"{$Cor} \" WHERE ID=$idUpdate");
$updated = mysqli_query($con, $queryUpdate) or die(mysqli_error($con));
}
header("Location: ../listagem.php");
die();
?>