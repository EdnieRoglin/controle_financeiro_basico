<?php
$mes = $_GET['mes'] ?? date('m');
$categoriaId = $_GET['categoria_id'] ?? null;
?>
<form class="filtros" method="GET" action="receita.php">


<select name="mes">
<option value="">Mês atual</option>
<option value="01">Janeiro</option>
<option value="02">Fevereiro</option>
</select>


<select name="categoria_id">
<option value="">Todas categorias</option>
<option value="1">Trabalho</option>
</select>


<button type="submit">Filtrar</button>
</form>