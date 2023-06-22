<?php 

include "../includes/cabecalho.php";
include "../includes/menu.php";
?>

<h1> Novo nutricionista </h1>

<p> Vamos cadastrar um novo nutricionista no sistema.</p>

<form action="inserir.php" method="post">

Nome: <input name ="nome" require maxlength="50">
<br>

Especialista: <input name ="especialidade" require maxlength="50">
<br>

Cidade: <input name ="cidade" require maxlength="50">
<br>

Estado: <input name ="estado" require maxlength="50">
<br>


<button type="submit"> Salvar</button>
</form>

<?php 
include "../includes/rodape.php";
?>