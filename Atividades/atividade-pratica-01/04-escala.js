let result;

function validar(campo) {
    let n = campo;
    if (n.lenght == 0 || isNaN(parseInt(n))) {
        window.alert("Informe o valor corretamente!");
        campo = "";
        campo.focus();
        return false;
    }

    return true;
}

function calculoRichter() {
    let amp = document.dados.amplitude.value;
    //window.alert(amp);
    let dt = document.dados.deltat.value;
    //window.alert(dt);

    if (validar(amp) && validar(dt)) {
        let r1 = Math.log10(amp);
        //window.alert(r1 + " r1");
        let r2 = Math.log10(8*dt);
        //window.alert(r1 + " r2");
        let resultado = (r1 + 3*r2 - 2.92);
        //window.alert(resultado + " resultado");
        //document.dados.resultado = resultado;
        result = resultado.toFixed(2);
        //window.alert(result +" result");
    }

    imprimeResultado(result);
}

function imprimeResultado(resultado){

    //window.alert(resultado);
    
    if (resultado < 3.5) {
        window.alert("Terremoto geralmente não sentido, mas gravado. Magnitude = " + resultado);
    }
    else if (3.5 <= resultado && resultado < 5.4) {
        window.alert("Terremoto às vezes sentido, mas raramente causa danos. Magnitude = " + resultado);
    }
    else if (5.5 <= resultado && resultado < 6.0) {
        window.alert("Terremoto causa no máximo pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiões próximas.  Magnitude =  - " + resultado);
    }
    else if (6.1 <= resultado && resultado < 6.9) {
        window.alert("Terremoto pode ser destrutivo em áreas em torno de até 100km do epicentro. Magnitude = " + resultado);
    }
    else if (7.0 <= resultado && resultado < 7.9) {
        window.alert("Grande terremoto. Pode causar sérios danos numa grande faixa. Magnitude = " + resultado);
    }
    else {
        window.alert("Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros. Magnitude = " + resultado);
    }
}