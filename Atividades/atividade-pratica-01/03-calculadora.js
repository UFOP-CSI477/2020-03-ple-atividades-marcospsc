function tecla(numero){
    var valor = document.calculadora.telaCalculadora.value;
    document.calculadora.telaCalculadora.value = valor + numero;
}

function calculo(){
    var dados = document.calculadora.telaCalculadora.value;
    //window.alert(dados);
    var resultado = 0;
    //window.alert(resultado);
    resultado = eval(dados);
    //window.alert(resultado);
    document.calculadora.telaCalculadora.value = resultado;
}