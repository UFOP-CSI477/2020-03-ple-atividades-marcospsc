//https://servicodados.ibge.gov.br/api/docs/censos/nomes?versao=2


function carregarNomes(nome){
    fetch("https://servicodados.ibge.gov.br/api/v2/censos/nomes/{nome}")
        .then(response => response.json())
        .then(data => exibeFreqNomes(data))
        .catch(error => console.error(error))
}

function exibeFreqNomes(){
    window.
}


