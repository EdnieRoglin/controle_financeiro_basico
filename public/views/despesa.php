<?php $mes = $_GET['mes'] ?? date('m');
$tipo = $_GET['tipo'] ?? null;
$categoriaId = $_GET['categoria_id'] ?? null;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Despesas</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>


<div class="app">
<?php include 'partials/sidebar.php'; ?>


<main class="content">
<h2>Despesas</h2>


<?php include 'filtros/despesa.php'; ?>


<table>
<thead>
<tr>
<th>Data</th>
<th>Descrição</th>
<th>Categoria</th>
<th>Tipo</th>
<th>Valor</th>
</tr>
</thead>
<tbody>
<tr>
<td>10/01</td>
<td>Aluguel</td>
<td>Moradia</td>
<td>Recorrente</td>
<td class="valor-despesa">R$ 1.200,00</td>
</tr>
</tbody>
</table>
</main>
</div>


</body>
</html>