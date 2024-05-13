
// Inicialização de todas as variáveis a serem usadas no sistema

// As div que estão em volta dos inputs moedas
var divKwanza = document.createElement("divKwanza");  
var divDolar = document.createElement("divDolar");  
var divEuro = document.createElement("divEuro");  

// As div que estão dentros dos divMoedas
var inputKwanza = document.getElementById('inputKwanza');
var inputDolar = document.getElementById('inputDolar');
var inputEuro = document.getElementById('inputEuro');
var inputValorPagar = document.getElementById('valorPagar');


// Spinners das moedas
var spinnerInputKwanza = document.getElementById("spinnerInputKwanza");
var spinnerInputDolar = document.getElementById("spinnerInputDolar");
var spinnerInputEuro = document.getElementById("spinnerInputEuro");

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
                inputDolar.value = data;
                inputValorPagar.value = Number(data) + Number(qtd*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("AOA", "EUR", qtd)
            .then(data => {
                inputEuro.value = data;
                inputValorPagar.value = Number(data) + Number(qtd*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });
        }
       
    }
    else if(id == "inputDolar"){
        if(inputDolar.value == ""){
            inputKwanza.value = "";
            inputEuro.value = "";
        }
        else{

            let qtd = inputDolar.value;

            converte("USD", "AOA", qtd)
            .then(data => {
                inputKwanza.value = data;
                console.log(data)
                inputValorPagar.value = (Number(data) + Number(qtd)*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("USD", "EUR", qtd)
            .then(data => {
                inputEuro.value = data;
                inputValorPagar.value = (Number(data) + Number(qtd)*200) ;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });
        }
    }
    else if(id == "inputEuro"){

        if(inputEuro.value == ""){
            inputDolar.value = "";
            inputKwanza.value = "";
        }
        else{

            let qtd = inputEuro.value;

            converte("EUR", "AOA", qtd)
            .then(data => {
                inputKwanza.value = data;
                inputValorPagar.value = (Number(data) + Number(qtd)*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("EUR", "USD", qtd)
            .then(data => {
                inputDolar.value = data;
                inputValorPagar.value = (Number(data) + Number(qtd)*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });
        }
    }
    else if(id == "montante"){

        let nomeMoeda = document.getElementById('nomeMoeda').value;
        let montante = document.getElementById('montante').value;

        if(montante == ""){
            montante = "0";
        }

        if(nomeMoeda == "Dolar"){
            converte("USD", "AOA", montante)
            .then(data => {
                inputKwanza.value = data;
                console.log((Number(data) + (Number(montante)*200)));
                inputValorPagar.value = Number(Number(data) + (Number(montante)*200)) ;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("USD", "EUR", montante)
            .then(data => {
                inputEuro.value = data;
                inputValorPagar.value = (Number(data) + Number(montante)*200) ;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            inputDolar.value = montante;
        }
        else if(nomeMoeda == "Euro"){
            converte("EUR", "AOA", montante)
            .then(data => {
                inputKwanza.value = data;
                inputValorPagar.value = (Number(data) + Number(montante)*200) ;
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("EUR", "USD", montante)
            .then(data => {
                inputDolar.value = data;
                inputValorPagar.value = (Number(data) + Number(montante)*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            inputEuro.value = montante;
        }
        else if(nomeMoeda == "Kwanza"){
            converte("AOA", "USD", montante)
            .then(data => {
                inputDolar.value = data;
                console.log(data);
                inputValorPagar.value = (Number(data) + Number(montante)*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            converte("AOA", "EUR", montante)
            .then(data => {
                inputEuro.value = data;
                inputValorPagar.value = (Number(data) + Number(montante)*200);
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });

            inputKwanza.value = montante;
        }
    }

}

function formatarMoeda(moeda){

    let novoValor= new Intl.NumberFormat("pt-br", {
        currency: "AOA",
        style: "currency",
       
    }).format(moeda)
    return novoValor;
}

async function converte(moedaBase, moedaPretendida, qtd) {

    var base = moedaBase+""+moedaPretendida;
    var url = "https://www.bna.ao/service/rest/taxas/conversor/moeda?moedaOrigem="+moedaBase+"&"+"moedaDestino="+moedaPretendida+"&montante"+"="+qtd

    try {
        const response = await fetch(url);
        const data = await response.json();
        return data.genericResponse[1].montanteConvertido;
    } catch (error) {
        console.error('Erro ao buscar dados:', error);
        throw error; 
    }
}

