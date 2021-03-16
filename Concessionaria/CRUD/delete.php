<?php include "./mysql_connect.php";

if (isset($_POST['id']) && !empty($_POST['id'])) {
  $idDelete = $_POST['id'];
  $queryDelete = sprintf("DELETE FROM Carro WHERE id=$idDelete");
  $removed = mysqli_query($con, $queryDelete) or die(mysqli_error($con));
}
header("Location: ../listagem.php");
die();

?>