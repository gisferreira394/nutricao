<?php 

include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$codigo = $_GET["id"];

$nome = "";
$especialidade = "";
$cidade = "";
$estado= "";


$sql = "select * from t_nutricionista where codigo = $codigo";
$todos_os_nutricionistas = mysqli_query($conexao, $sql);
while ($um_nutricionista = mysqli_fetch_assoc($todos_os_nutricionistas)):

    $nome = $um_nutricionista ["nome"];
    $especialidade = $um_nutricionista["especialidade"];
    $cidade = $um_nutricionista ["cidade"];
    $estado = $um_nutricionista ["estado"];
    
    endwhile
?>
<div class="container-fluid">
<h1> Ficha de nutricionistas</h1>

<br>

<span class="badge text-bg-dark">Nome completo do nutricionista:</span> <?php echo $nome ?><br>
<span class="badge text-bg-dark">Especialidade: </span>  <?php echo $especialidade ?> <br>
<span class="badge text-bg-dark">Cidade: </span> <?php echo $cidade ?> <br>
<span class="badge text-bg-dark">Estado: </span> <?php echo $estado ?> <br>
</div>
<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>
