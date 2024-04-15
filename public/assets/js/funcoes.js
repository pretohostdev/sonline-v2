
var inputKwanza = document.getElementById('inputKwanza');
var inputDolar = document.getElementById('inputDolar');
var inputEuro = document.getElementById('inputEuro');

// inputKwanza.addEventListener('input', function(event){
//     let valor = event.target.value;
//     console.log('Entrada do usuário:', valor);

//     let inputDolar = document.getElementById('inputDolar');
//     let inputEuro = document.getElementById('inputEuro');

//     var mgs = 'Erro ao acessar ao acesar a API';
//     var url = "https://v6.exchangerate-api.com/v6/b84dc72513a0e6bae9a6a925/latest/USD";

//       xhr = new XMLHttpRequest();
//       xhr.open("GET", url, true);

//         // Coloca aqui o recarregamento a página

//         xhr.onreadystatechange = function() {
//             if (xhr.readyState === XMLHttpRequest.DONE) {

//                 if (xhr.status === 200) {
//                     var dados = JSON.parse(xhr.responseText);

//                     if(dados.result == "success"){
//                         console.log("Dados obtidos com sucesso!");

//                         // var moedas = dados.conversion_rates;
//                         // for (var moeda in moedas) {
//                         //     console.log(moeda + ": " + moedas[moeda]);
//                         // }

//                         // Selecione a tabela onde deseja adicionar as linhas e células

//                         var tabela = document.getElementById('tabelaMoeda');

//                         // Crie uma nova linha (tr)
//                         var novaLinha = document.createElement('tr');

//                         // Adicione células (td) à nova linha
//                         for (var i = 0; i < 2; i++) {
//                             var novaCelula = document.createElement('td');
//                             novaCelula.textContent = 'Célula ' + (i + 1);
//                             novaLinha.appendChild(novaCelula);
//                         }

                        

//                     }
//                     else{
//                         console.log("Erro com os dados!");
//                     }
                    

//                     // Termina o recarregamento da página em caso de sucesso
//                 } else {
//                     console.log("Erro ao acessar a API.");
//                      // Termina o recarregamento da página em caso de falha
//                 }
//             } 
//         };

//         xhr.send();

// });

// inputDolar.addEventListener('input', function(event){
//     let valor = event.target.value;
//     console.log('Entrada do usuário:', valor);

//     let inputKwanza = document.getElementById('InputDolar');
//     let inputEuro = document.getElementById('InputEuro');

//     let url = "https://v6.exchangerate-api.com/v6/b84dc72513a0e6bae9a6a925/latest/USD"
// });

// inputEuro.addEventListener('input', function(event){
//     let valor = event.target.value;
//     console.log('Entrada do usuário:', valor);

//     let inputDolar = document.getElementById('inputDolar');
//     let inputKwanza = document.getElementById('inputEuro');
// });



// function converterMoeda(moeda){
//     console.log(moeda);
// }

carregarTabelaMoeda();

function carregarTabelaMoeda(){

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

            
        }
  })
  .catch(error => {
    // Manipula erros de requisição
    console.error('Erro:', error);
  });

    

   
}

// conversaoMoeda("USD", "AOA", "100");

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