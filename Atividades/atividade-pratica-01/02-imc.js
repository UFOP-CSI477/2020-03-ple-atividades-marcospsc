function validar(campo) {
    let n = campo.value;

    if (n.lenght == 0 || isNaN (parseInt(n))) {
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
        let resultado = (parseInt(peso.value) / (parseInt(altura.value) * (parseInt(altura.value))));
        document.dados.resultado.value = resultado * 10000;
    }


}