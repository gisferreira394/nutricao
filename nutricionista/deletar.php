<?php
include "../includes/conexao.php";
$codigo = $_GET ["id"];

$sql = "delete from t_nutricionista where codigo = $codigo";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:selecionar.php");
?>