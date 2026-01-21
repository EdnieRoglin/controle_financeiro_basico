<?php
$status = $_GET['status'] ?? null;
?>

<form class="filtros" method="GET" action="categoria.php">


<select name="status">
<option value="">Todas</option>
<option value="ativa">Ativas</option>
<option value="inativa">Inativas</option>
</select>


<button type="submit">Filtrar</button>
</form>