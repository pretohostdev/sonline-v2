
let inputKwanza = document.getElementById('inputKwanza');
let inputDolar = document.getElementById('inputDolar');
let inputEuro = document.getElementById('inputEuro');

inputKwanza.addEventListener('input', function(event){
    let valor = event.target.value;
    console.log('Entrada do usuário:', valor);

    let inputDolar = document.getElementById('inputDolar');
    let inputEuro = document.getElementById('inputEuro');

    var mgs = 'Erro ao acessar ao acesar a API';
      var url = 'https://consulta.edgarsingui.ao/consultar/' + num_bi;

      xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);

        // Permitir a animação de carregamento da página
        modal.style.display = 'block';

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {

                if (xhr.status === 200) {
                  var dados = JSON.parse(xhr.responseText);
                  console.log(dados.name);
                  nome.value = dados.name;
                  dataNascimento.value = dados.data_de_nascimento;
                  nomePai.value = dados.pai;
                  nomeMae.value = dados.mae;
                  morada.value = dados.morada;
                  emitido.value = dados.emitido_em;

                  // Terminar a animação de carregamento da página
                  modal.style.display = 'none';
                } else {
                    console.log("Erro ao realizar a transição.");
                }
            } 
        };

        xhr.send();

});

inputDolar.addEventListener('input', function(event){
    let valor = event.target.value;
    console.log('Entrada do usuário:', valor);

    let inputKwanza = document.getElementById('InputDolar');
    let inputEuro = document.getElementById('InputEuro');

    let url = "https://v6.exchangerate-api.com/v6/b84dc72513a0e6bae9a6a925/latest/USD"
});

inputEuro.addEventListener('input', function(event){
    let valor = event.target.value;
    console.log('Entrada do usuário:', valor);

    let inputDolar = document.getElementById('inputDolar');
    let inputKwanza = document.getElementById('inputEuro');
});



function converterMoeda(moeda){
    console.log(moeda);
}