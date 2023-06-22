<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["codigo"];
$nome = "";
$sql = "select * from t_nutricionista where codigo = $codigo";
$todos_os_nutricionistas = mysqli_query($conexao, $sql);
while($um_nutricionista = mysqli_fetch_assoc($todos_os_nutricionistas)):
    $nome = $um_nutricionista["nome"];
endwhile;
?>
<h1>Editar dados <?php echo $codigo; ?></h1>
<form method="post" action="atualizar.php ?codigo=<?php echo $codigo;?>">
    Nome: <input name="nome" value=" <?php echo $nome;?>"><br>
    <button type="submit">Atualizar</button>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>