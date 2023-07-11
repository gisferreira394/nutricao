<?php 

include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<div class="container-fluid">
<h1> Novo nutricionista </h1>

<p> Vamos cadastrar um novo nutricionista no sistema.</p>

<form action="inserir.php" method="post">

<div class="form-control">
    <input type="value" required="" name="nome">
    <label>
        <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">o</span><span style="transition-delay:100ms">m</span><span style="transition-delay:150ms">e:</span>
    </label>
</div>
<br>

<div class="form-control">
    <input type="value" required="" name="especialidade">
    <label>
        <span style="transition-delay:0ms">E</span><span style="transition-delay:100ms">s</span><span style="transition-delay:150ms">p</span><span style="transition-delay:200ms">e</span><span style="transition-delay:250ms">c</span><span style="transition-delay:300ms">i</span><span style="transition-delay:350ms">a</span><span style="transition-delay:350ms">l</span><span style="transition-delay:350ms">i</span><span style="transition-delay:350ms">d</span><span style="transition-delay:350ms">a</span><span style="transition-delay:350ms">d</span><span style="transition-delay:350ms">e:</span>
    </label>
</div>


<div class="form-control">
    <input type="value" required="" name="cidade">
    <label>
        <span style="transition-delay:0ms">C</span><span style="transition-delay:100ms">i</span><span style="transition-delay:150ms">d</span><span style="transition-delay:200ms">a</span><span style="transition-delay:250ms">d</span><span style="transition-delay:300ms">e:</span>
    </label>
</div>


<div class="form-control">
<select class="form-select" size="3" aria-label="size 3 select example" name="estado">

                    <option value="AC">AC</option>
                    <option value="AL">	AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">	AM</option>
                    <option value="BA">	BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">	DF</option>
                    <option value="ES">	ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">	MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">	PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">	PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">	RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">	RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">	SC</option>
                    <option value="SP">	SP</option>
                    <option value="SE">	SE</option>
                    <option value="TO">	TO</option>
                </select>

</div>
             
<button type="submit" class="btn btn-outline-dark"> Salvar</button>
</form>
</div>
<?php 
include "../includes/rodape.php";
?>