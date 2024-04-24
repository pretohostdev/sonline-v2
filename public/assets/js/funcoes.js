
// Inicialização de todas as variáveis a serem usadas no sistema


// As div que estão em volta dos inputs moedas
var divKwanza = document.createElement("divKwanza");  
var divDolar = document.createElement("divDolar");  
var divEuro = document.createElement("divEuro");  

// As div que estão dentros dos divMoedas
var inputKwanza = document.getElementById('inputKwanza');
var inputDolar = document.getElementById('inputDolar');
var inputEuro = document.getElementById('inputEuro');

// Spinners das moedas
var spinnerInputKwanza = document.getElementById("spinnerInputKwanza");
var spinnerInputDolar = document.getElementById("spinnerInputDolar");
var spinnerInputEuro = document.getElementById("spinnerInputEuro");


window.sr = ScrollReveal({reset:true});

sr.reveal('.tituloAnimado', {
    rotate:{x:0, y:80, z:0},
    duration:3000});


carregarTabelaMoeda();
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



function conversaoMoeda(id){

    if(id == "inputKwanza"){

        if(inputKwanza.value == ""){
            inputDolar.value = "";
            inputEuro.value = "";
        }
        else{

            let qtd = inputKwanza.value;

            spinnerInputDolar.style.display = "block";
            spinnerInputEuro.style.display = "block";

            converte("AOA", "USD", qtd)
            .then(data => {
                spinnerInputDolar.style.display = "none";
                spinnerInputEuro.style.display = "none";
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

            spinnerInputKwanza.style.display = "block";
            spinnerInputEuro.style.display = "block";


            converte("USD", "AOA", qtd)
            .then(data => {
                spinnerInputKwanza.style.display = "none";
                spinnerInputEuro.style.display = "none";
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
    else if(id == "inputEuro"){

        console.log("Entraste em mim");
        if(inputEuro.value == ""){
            inputDolar.value = "";
            inputKwanza.value = "";
        }
        else{

            let qtd = inputEuro.value;

            spinnerInputKwanza.style.display = "block";
            spinnerInputDolar.style.display = "block";

            converte("EUR", "AOA", qtd)
            .then(data => {

                spinnerInputKwanza.style.display = "none";
                spinnerInputDolar.style.display = "none";
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

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('loginButton').addEventListener('click', function () {
        // Feche o modal manualmente após o clique no botão
        // var verticalCenter = new bootstrap.Modal(document.getElementById('verticalCenter'));
        // verticalCenter.hide();

        // window.location.href = "{{ route('login') }}";

        var loginUrl = this.getAttribute('data-login-url');

    // Redireciona para a rota de login
    window.location.href = loginUrl;
    });
});