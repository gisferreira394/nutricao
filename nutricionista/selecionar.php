
<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>
<img src="../img/melancia.png" width="50">    
Módulo de nutricionista
</h1>

<p>
<a href="novo.php"> Adicionar nutricionista </a>
</p>

<h2> Listagem de nutricionista </h2>
<table  class="table table-dark table-hover">

<tr> 
<td>Código</td>
    <td>Nome</td>
    <td>Especialidade</td>
    <td>Cidade</td>
    <td>Estado</td>
    <td>Ações</td>

</tr>
<!-- fim da linha de título --->
<?php
$sql = "select * from t_nutricionista";
$todos_os_nutricionistas = mysqli_query($conexao, $sql);
while($um_nutricionista = mysqli_fetch_assoc($todos_os_nutricionistas)):

?>

<tr>
    <td> <?php echo $um_nutricionista ['codigo'];?></td>
    <td><?php echo $um_nutricionista ['nome'];?></td>
    <td><?php echo $um_nutricionista ['especialidade'];?></td>
    <td><?php echo $um_nutricionista ['cidade'];?></td>
    <td><?php echo $um_nutricionista ['estado'];?></td>

    <td>
        <a href="visualizar.php?id=<?php echo $um_nutricionista["codigo"];?>" title="Ver completo">
        <img src="../img/visualizar.png" width="15" title="Visualizar funcionários"></a>

        <a href="editar.php ?id=<?php echo $um_nutricionista["codigo"];?>"> 
        <img src="../img/editar.png" width="15" title="Editar dados do funcionário"></a>

        <a href="deletar.php?id=<?php echo $um_nutricionista['codigo'];?>"> 
        <img src="../img/deletar.png" width="15" title="Excluir funcionário"></a>
    </td>
</tr>

<?php
endwhile;
?>

</table>  

<?php
include "../includes/rodape.php";
?>