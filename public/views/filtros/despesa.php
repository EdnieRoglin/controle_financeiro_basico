<form class="filtros" method="GET" action="despesa.php">


<select name="mes">
<option value="">Mês atual</option>
<option value="01">Janeiro</option>
<option value="02">Fevereiro</option>
<option value="03">Março</option>
</select>


<select name="tipo">
<option value="">Todas</option>
<option value="recorrente">Recorrentes</option>
<option value="isolada">Isoladas</option>
</select>


<select name="categoria_id">
<option value="">Todas categorias</option>
<option value="1">Moradia</option>
<option value="2">Transporte</option>
</select>


<button type="submit">Filtrar</button>
</form>