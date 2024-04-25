


carregarTabelaMoeda();







document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('loginButton').addEventListener('click', function () {
        // Feche o modal manualmente após o clique no botão

        // window.location.href = "{{ route('login') }}";

        var loginUrl = this.getAttribute('data-login-url');

    // Redireciona para a rota de login
    window.location.href = loginUrl;
    });
});









function carregarTabelaMoeda(){

    // Carregamento dos Spinners
var spinner = document.getElementById('spinnerTabela');
    spinner.style.display = "block";  
    
var tabela = document.getElementById('tabelaMoeda');

fetch('https://v6.exchangerate-api.com/v6/b84dc72513a0e6bae9a6a925/latest/USD')
  .then(response => {
    if (!response.ok) {
      throw new Error('Erro ao obter os dados');
    }
    return response.json();
  })
  .then(dados => {
        var moedas = dados.conversion_rates;
        for (var moeda in moedas) {

            var novaLinha = document.createElement('tr');

                var celula1 = document.createElement('td');
                celula1.textContent = moeda;
                celula1.setAttribute('class', 'text-dark');

                var celula2 = document.createElement('td');
                celula2.textContent = moedas[moeda];
                celula2.setAttribute('class', 'text-dark');

                novaLinha.appendChild(celula1);
                novaLinha.appendChild(celula2);

                tabela.appendChild(novaLinha);

                // Terminar o spinner
                spinner.style.display = "none";
        }
  })
  .catch(error => {
    // Manipula erros de requisição
    console.error('Erro:', error);
  });

}
