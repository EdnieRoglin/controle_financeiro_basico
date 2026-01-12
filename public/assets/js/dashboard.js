function mostrar(tela) {
    fetch(`index.php?tela=${tela}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('conteudo').innerHTML = html;
        });
}
