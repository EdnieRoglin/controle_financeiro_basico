<?php $title = 'categoria'; ?>

<?php require __DIR__ . '/partials/head.php'; ?>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen flex">

<?php require __DIR__ . '/partials/sidebar.php'; ?>

<main class="flex-1 overflow-y-auto">
    <?php require __DIR__ . '/partials/topbar.php'; ?>

    <div class="max-w-6xl mx-auto p-8 space-y-8">

<!-- Scrollable Area -->
<div class="flex-1 overflow-y-auto p-8">
<div class="max-w-6xl mx-auto space-y-8">
<!-- Top Actions & Stats -->
<div class="flex flex-col md:flex-row gap-6 items-end justify-between">
<div class="w-full md:w-auto flex-1 max-w-sm">
<div class="flex items-center gap-3 mb-2">
</div>
</div>
<div class="flex items-center gap-3">
<div class="bg-white dark:bg-card-dark border border-slate-200 dark:border-border-dark rounded-lg flex p-1">

</div>
<button 
  onclick="document.getElementById('modal-receita').classList.remove('hidden')"
  class="flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-lg font-bold text-sm">
  <span class="material-symbols-outlined">add</span>
  Nova Categoria
</button>
</div>
</div>
<!-- Income Table -->
<div class="bg-white dark:bg-card-dark border border-slate-200 dark:border-border-dark rounded-xl shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-slate-200 dark:border-border-dark flex items-center justify-between">
<h3 class="font-bold text-lg">Categorias</h3>

</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Nome</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Tipo</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">Ações</th>
</tr>
</thead>



<tbody class="divide-y divide-slate-100 dark:divide-border-dark">

<?php if (empty($categorias)): ?>
    <tr>
        <td colspan="5" class="px-6 py-6 text-center text-slate-500">
            Nenhuma categoria cadastrada
        </td>
    </tr>
<?php else: ?>
    <?php foreach ($categorias as $categoria): ?>
        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/20 transition-colors">

            <!-- NOME -->
            <td class="px-6 py-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-lg">payments</span>
                    </div>
                    <span class="font-medium">
                        <?= htmlspecialchars($categoria['nome']) ?>
                    </span>
                </div>
            </td>

            <!-- VALOR -->
            <td class="px-6 py-4 font-bold text-green-500">
                 <?= htmlspecialchars($categoria['tipo']) ?>
            </td>


            <!-- TIPO -->
            <td class="px-6 py-4">
                <?php if ($categoria['ativo'] === 1): ?>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400
                                 border border-blue-200 dark:border-blue-800">
                        ATIVO
                    </span>
                <?php else: ?>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400
                                 border border-slate-200 dark:border-slate-700">
                        INATIVO
                    </span>
                <?php endif; ?>
            </td>

            <!-- AÇÕES -->
            <td class="px-6 py-4 text-right">
                <a href="?page=receita&action=editar&id=<?= $categoria['id'] ?>"
                   class="p-2 text-slate-400 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">edit</span>
                </a>
            </td>

        </tr>
    <?php endforeach; ?>
<?php endif; ?>

</tbody>

</table>
</div>
</div>
</div>
</div>
</main>
</div>



<!-- Slide-over / Modal for New Income (Mockup Overlay) -->
<!-- Note: In a real app, this would be hidden until button click -->
<div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-50 overflow-hidden hidden" role="dialog">
<div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity"></div>
<div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
<div class="w-screen max-w-md">
<div class="h-full flex flex-col bg-white dark:bg-card-dark shadow-2xl">
<div class="flex-1 h-0 overflow-y-auto">
<div class="py-6 px-8 border-b border-slate-200 dark:border-border-dark flex items-center justify-between">
<h2 class="text-xl font-bold" id="modal-title">Nova Receita</h2>
<button class="text-slate-400 hover:text-slate-600">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div class="flex-1 flex flex-col justify-between">
<div class="px-8 py-8 space-y-6">
<div>
<label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Nome da Receita</label>
<input class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg text-sm focus:ring-primary focus:border-primary" placeholder="Ex: Salário" type="text"/>
</div>
<div>
<label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Valor (R$)</label>
<div class="relative">
<span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm font-bold">R$</span>
<input class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg pl-10 text-sm focus:ring-primary focus:border-primary" placeholder="0,00" step="0.01" type="number"/>
</div>
</div>
<div>
<label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Data do Recebimento</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">calendar_today</span>
<input class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg text-sm focus:ring-primary focus:border-primary" type="date"/>
</div>
</div>
<div class="flex items-center justify-between py-4 border-y border-slate-100 dark:border-border-dark">
<div>
<p class="text-sm font-bold">Receita Recorrente</p>
<p class="text-xs text-slate-500">Repetir automaticamente todo mês</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox" value=""/>
<div class="w-11 h-6 bg-slate-200 peer-focus:outline-none dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div>
<label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Categoria</label>
<select class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg text-sm focus:ring-primary focus:border-primary">
<option>Salário</option>
<option>Freelance</option>
<option>Investimentos</option>
<option>Vendas</option>
<option>Outros</option>
</select>
</div>
</div>
</div>
</div>
<div class="flex-shrink-0 px-8 py-6 bg-slate-50 dark:bg-slate-800/50 flex items-center gap-3">
<button class="flex-1 px-4 py-2.5 bg-white dark:bg-card-dark border border-slate-200 dark:border-border-dark rounded-lg font-bold text-sm text-slate-700 dark:text-slate-300">Cancelar</button>
<button class="flex-1 px-4 py-2.5 bg-primary text-white rounded-lg font-bold text-sm hover:bg-primary/90">Salvar Receita</button>
</div>
</div>
</div>
</div>
</div>
<div id="modal-receita" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50">

  <div class="bg-white dark:bg-card-dark w-full max-w-lg rounded-xl shadow-lg p-6 space-y-6">

    <!-- Cabeçalho -->
    <div class="flex justify-between items-center">
      <h2 class="text-xl font-bold">Nova Categoria</h2>
      <button 
        onclick="document.getElementById('modal-receita').classList.add('hidden')"
        class="text-slate-500 hover:text-slate-700">
        ✕
      </button>
    </div>

    <!-- FORMULÁRIO -->
    <form action="/receitas/store.php" method="POST" class="space-y-4">

      <div>
        <label class="block text-sm font-medium mb-1">Descrição</label>
        <input 
          type="text" 
          name="descricao"
          class="w-full rounded-lg border px-4 py-2 focus:ring-2 focus:ring-primary"
          required>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Valor</label>
        <input 
          type="number" 
          step="0.01"
          name="valor"
          class="w-full rounded-lg border px-4 py-2 focus:ring-2 focus:ring-primary"
          required>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Data</label>
        <input 
          type="date" 
          name="data"
          class="w-full rounded-lg border px-4 py-2"
          required>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Categoria</label>
        <select 
          name="categoria_id"
          class="w-full rounded-lg border px-4 py-2">
          <option value="">Selecione</option>
        </select>
      </div>

      <!-- AÇÕES -->
      <div class="flex justify-end gap-3 pt-4">
        <button 
          type="button"
          onclick="document.getElementById('modal-receita').classList.add('hidden')"
          class="px-4 py-2 rounded-lg border">
          Cancelar
        </button>

        <button 
          type="submit"
          class="px-5 py-2 rounded-lg bg-primary text-white font-bold">
          Salvar
        </button>
      </div>

    </form>
  </div>
</div>



</body></html>