function validar(campo) {
    let n = campo.value;

    if (n.lenght == 0 || isNaN(parseInt(n))) {
        window.alert("Informe o valor corretamente!");
        campo.value = "";
        campo.focus();
        return false;
    }

    return true;
}

function calcularIMC() {
    let peso = document.dados.peso;
    let altura = document.dados.altura;

    if (validar(peso) && validar(altura)) {
        let resultado = (parseInt(peso.value) / (parseInt(altura.value) * (parseInt(altura.value)))) * 10000;
        
        document.dados.resultado.value = resultado.toFixed(2);
    }

    imprimeDiagnostico(document.dados.resultado.value);

}

function imprimeDiagnostico(resultado){

    resultado = this.resultado.value;
    
    if (resultado < 18.5) {
        window.alert("Indivíduo apresenta subnutrição - " + resultado);
    }
    else if (18.5 <= resultado && resultado < 24.9) {
        window.alert("Indivíduo apresenta peso saudável - " + resultado);
    }
    else if (25.0 <= resultado && resultado < 29.9) {
        window.alert("Indivíduo apresenta sobrepeso - " + resultado);
    }
    else if (30.0 <= resultado && resultado < 34.9) {
        window.alert("Indivíduo apresenta obesidade grau 1 - " + resultado);
    }
    else if (35.0 <= resultado && resultado < 39.9) {
        window.alert("Indivíduo apresenta obesidade grau 2 - " + resultado);
    }
    else {
        window.alert("Indivíduo apresenta obesidade grau 3 - " + resultado);
    }
}