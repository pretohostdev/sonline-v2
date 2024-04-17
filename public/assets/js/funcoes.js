
var inputKwanza = document.getElementById('inputKwanza');
var inputDolar = document.getElementById('inputDolar');
var inputEuro = document.getElementById('inputEuro');


carregarTabelaMoeda();
function carregarTabelaMoeda(){

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



function conversaoMoeda(id){

    if(id == "inputKwanza"){

        if(inputKwanza.value == ""){
            inputDolar.value = "";
            inputEuro.value = "";
        }
        else{

            let qtd = inputKwanza.value;

            converte("AOA", "USD", qtd)
            .then(data => {
                inputDolar.value = data.conversion_result;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("AOA", "EUR", qtd)
            .then(data => {
                inputEuro.value = data.conversion_result;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });
        }
       
    }
    else if(id == "inputDolar"){
        if(inputDolar.value == ""){
            inputDolar.value = "";
            inputEuro.value = "";
        }
        else{

            let qtd = inputDolar.value;

            converte("USD", "AOA", qtd)
            .then(data => {
                inputKwanza.value = data.conversion_result;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("USD", "EUR", qtd)
            .then(data => {
                inputEuro.value = data.conversion_result;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });
        }
    }
    else{
        if(inputEuro.value == ""){
            inputDolar.value = "";
            inputKwanza.value = "";
        }
        else{

            let qtd = inputKwanza.value;

            converte("EUR", "AOA", qtd)
            .then(data => {
                inputKwanza.value = data.conversion_result;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("EUR", "USD", qtd)
            .then(data => {
                inputDolar.value = data.conversion_result;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });
        }
    }

}

// function teste(id){
//     var inputKwanza = document.getElementById(id);
//     console.log(inputKwanza);
//     // console.log("Meu ID é: " + id);
// }

async function converte(moedaBase, moedaPretendida, qtd) {

    var url = "https://v6.exchangerate-api.com/v6/b84dc72513a0e6bae9a6a925/pair/"+moedaBase+"/"+moedaPretendida+"/"+qtd
    try {
        const response = await fetch(url);
        const data = await response.json();
        return data; // Retorna os dados obtidos da API
    } catch (error) {
        console.error('Erro ao buscar dados:', error);
        throw error; // Lança o erro para ser capturado por um bloco try/catch externo
    }
}