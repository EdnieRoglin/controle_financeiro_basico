<?php $title = 'dashboard'; ?>

<?php require __DIR__ . '/partials/head.php'; ?>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen flex">

<?php require __DIR__ . '/partials/sidebar.php'; ?>

<main class="flex-1 overflow-y-auto">
    <?php require __DIR__ . '/partials/topbar.php'; ?>

    <div class="max-w-6xl mx-auto p-8 space-y-8">
        <!-- TODO O CONTEÚDO DO DASHBOARD -->
         <!-- Stats Summary Row -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-6 rounded-xl flex items-center justify-between shadow-sm">
<div>
<p class="text-sm font-medium text-slate-500 uppercase tracking-wider mb-1">Total Receitas</p>
<h3 class="text-3xl font-extrabold tracking-tight">
    R$ <?= number_format($totalReceitas, 2, ',', '.') ?>
  </h3>
<div class="flex items-center gap-1 mt-2 text-emerald-500 text-sm font-bold">
<!--span class="material-symbols-outlined text-sm">arrow_upward</span-->
<!--span>12% este mês</span-->
</div>
</div>
<div class="w-14 h-14 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-3xl">payments</span>
</div>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-6 rounded-xl flex items-center justify-between shadow-sm">
<div>
<p class="text-sm font-medium text-slate-500 uppercase tracking-wider mb-1">Total Despesas</p>
<h3 class="text-3xl font-extrabold tracking-tight">
    R$ <?= number_format($totalDespesa, 2, ',', '.') ?>
  </h3>
<div class="flex items-center gap-1 mt-2 text-rose-500 text-sm font-bold">
<!--span class="material-symbols-outlined text-sm">arrow_downward</span-->
<!--span>5.2% este mês</span-->
</div>
</div>
<div class="w-14 h-14 bg-rose-100 dark:bg-rose-900/30 text-rose-600 dark:text-rose-400 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-3xl">shopping_cart</span>
</div>
</div>
</section>
<!-- Transactions Grid -->
<section class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<!-- Recent Incomes >
<div>
<div class="flex items-center justify-between mb-4 px-1">
<h2 class="text-lg font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-emerald-500">add_circle</span>
                            Últimas Receitas
                        </h2>
<button class="text-xs font-bold text-primary hover:underline">VER TUDO</button>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-4 py-3 text-xs font-bold text-slate-500 uppercase">Fonte</th>
<th class="px-4 py-3 text-xs font-bold text-slate-500 uppercase">Data</th>
<th class="px-4 py-3 text-xs font-bold text-slate-500 uppercase text-right">Valor</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Salário Mensal</td>
<td class="px-4 py-4 text-sm text-slate-500">28 Out</td>
<td class="px-4 py-4 text-sm font-bold text-emerald-600 dark:text-emerald-400 text-right">+$5,000.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Projeto Freelance</td>
<td class="px-4 py-4 text-sm text-slate-500">25 Out</td>
<td class="px-4 py-4 text-sm font-bold text-emerald-600 dark:text-emerald-400 text-right">+$1,200.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Dividendos Ações</td>
<td class="px-4 py-4 text-sm text-slate-500">20 Out</td>
<td class="px-4 py-4 text-sm font-bold text-emerald-600 dark:text-emerald-400 text-right">+$450.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Venda Equipamento</td>
<td class="px-4 py-4 text-sm text-slate-500">15 Out</td>
<td class="px-4 py-4 text-sm font-bold text-emerald-600 dark:text-emerald-400 text-right">+$1,000.00</td>
</tr>
</tbody>
</table>
</div>
</div-->
<!-- Recent Expenses >
<div>
<div class="flex items-center justify-between mb-4 px-1">
<h2 class="text-lg font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-rose-500">do_not_disturb_on</span>
                            Últimas Despesas
                        </h2>
<button class="text-xs font-bold text-primary hover:underline">VER TUDO</button>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-4 py-3 text-xs font-bold text-slate-500 uppercase">Estabelecimento</th>
<th class="px-4 py-3 text-xs font-bold text-slate-500 uppercase">Data</th>
<th class="px-4 py-3 text-xs font-bold text-slate-500 uppercase text-right">Valor</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Supermercado Silva</td>
<td class="px-4 py-4 text-sm text-slate-500">27 Out</td>
<td class="px-4 py-4 text-sm font-bold text-rose-600 dark:text-rose-400 text-right">-$850.20</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Assinatura Netflix</td>
<td class="px-4 py-4 text-sm text-slate-500">25 Out</td>
<td class="px-4 py-4 text-sm font-bold text-rose-600 dark:text-rose-400 text-right">-$55.90</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Posto de Gasolina</td>
<td class="px-4 py-4 text-sm text-slate-500">22 Out</td>
<td class="px-4 py-4 text-sm font-bold text-rose-600 dark:text-rose-400 text-right">-$320.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-4 py-4 text-sm font-semibold">Restaurante Gourmet</td>
<td class="px-4 py-4 text-sm text-slate-500">20 Out</td>
<td class="px-4 py-4 text-sm font-bold text-rose-600 dark:text-rose-400 text-right">-$210.50</td>
</tr>
</tbody>
</table>
</div>
</div-->
</section>
<!-- Top Categories Insights -->
<section>
<div class="mb-4 px-1">
<h2 class="text-lg font-bold">Principais Categorias</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Top Revenue Category -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 rounded-xl flex items-center gap-5">
<div class="w-16 h-16 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined text-4xl">work</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-end mb-1">
<div>
<p class="text-xs font-bold text-slate-500 uppercase tracking-tighter">Maior Faturamento</p>
<h4 class="text-lg font-bold">Trabalho Regular</h4>
</div>
<span class="text-xl font-extrabold text-primary">$8,500.00</span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 75%"></div>
</div>
<p class="text-[10px] text-slate-400 mt-2 font-medium">Corresponde a 75% da receita total</p>
</div>
</div>
<!-- Top Expense Category -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 rounded-xl flex items-center gap-5">
<div class="w-16 h-16 bg-rose-100 dark:bg-rose-900/30 text-rose-600 dark:text-rose-400 rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined text-4xl">home</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-end mb-1">
<div>
<p class="text-xs font-bold text-slate-500 uppercase tracking-tighter">Maior Gasto</p>
<h4 class="text-lg font-bold">Moradia &amp; Aluguel</h4>
</div>
<span class="text-xl font-extrabold text-rose-600 dark:text-rose-400">$2,200.00</span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
<div class="bg-rose-500 h-full rounded-full" style="width: 28%"></div>
</div>
<p class="text-[10px] text-slate-400 mt-2 font-medium">Corresponde a 28% das despesas totais</p>
</div>
</div>
</div>
</section>
</div>
</main>
</body></html>
    </div>
</main>

</body>
</html>
