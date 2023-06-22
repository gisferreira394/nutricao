<?php 
include "../includes/conexao.php";

$codigo = $_GET["codigo"];
$nome = $_POST ["nome"];
$sql = "update t_nutricionista set nome = '$nome' where codigo =$codigo";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>