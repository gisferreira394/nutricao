<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$codigo = $_GET["id"];
$nome = "";
$especialidade = "";
$cidade = "";
$estado = "";


$sql = "select * from t_nutricionista where codigo = $codigo";
$todos_os_nutricionistas = mysqli_query($conexao, $sql);
while ($um_nutricionista = mysqli_fetch_assoc($todos_os_nutricionistas)) :
    $nome = $um_nutricionista["nome"];
    $especialidade = $um_nutricionista["especialidade"];
    $cidade = $um_nutricionista["cidade"];
    $estado = $um_nutricionista["estado"];

endwhile;
?>
<div class="container-fluid">
    <h1>Editar dados <?php echo $codigo; ?></h1>
    <form method="post" action="atualizar.php ?codigo=<?php echo $codigo; ?>">
        Nome: <input name="nome" value=" <?php echo $nome; ?>"><br>
        especialidade: <input name="especialidade" value=" <?php echo $especialidade; ?>"><br>
        Cidade: <input name="cidade" value=" <?php echo $cidade; ?>"><br>
        Estado: <input name="estado" value=" <?php echo $estado; ?>"><br>
        <br>
        <button type="submit" class="btn btn-outline-dark">Atualizar</button>
    </form>
</div>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>