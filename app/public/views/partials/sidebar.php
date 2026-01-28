
<!-- Side Navigation Bar -->
<aside class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark flex flex-col h-screen sticky top-0">
<div class="p-6 flex items-center gap-3">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">account_balance_wallet</span>
</div>
<h1 class="text-lg font-bold tracking-tight">FinanceApp</h1>
</div>
<nav class="flex-1 px-4 py-4 space-y-2">

<a href="/projeto-financeiro/app/public/index.php?page=dashboard"
class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-semibold uppercase tracking-wider">Dashboard</p>
</a>

<a href="/projeto-financeiro/app/public/index.php?page=receita"
class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors cursor-pointer text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined">trending_up</span>
<p class="text-sm font-semibold uppercase tracking-wider">RECEITAS</p>
</a>

<a href="/projeto-financeiro/app/public/index.php?page=despesa"
class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors cursor-pointer text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined">trending_down</span>
<p class="text-sm font-semibold uppercase tracking-wider">DESPESAS</p>
</a>

<a href="/projeto-financeiro/app/public/index.php?page=categoria" 
class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors cursor-pointer text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined">category</span>
<p class="text-sm font-semibold uppercase tracking-wider">CATEGORIAS</p>
</a>

<div class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors cursor-pointer text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined">bar_chart</span>
<p class="text-sm font-semibold uppercase tracking-wider">RELATÓRIOS</p>
</div>

</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 px-4 rounded-lg flex items-center justify-center gap-2 transition-all">
<span class="material-symbols-outlined text-lg">add_circle</span>
<span>Nova Transação</span>
</button>
</div>
</aside>