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

<h1> Ficha de nutricionistas</h1>

Nome completo do nutricionista:  <?php echo $nome ?> <br>
Especialidade:  <?php echo $especialidade ?> <br>
Cidade: <?php echo $cidade ?> <br>
Estado: <?php echo $estado ?> <br>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>
