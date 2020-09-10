function validar(campo) {
    let n = campo.value;


    let masculino = document.getElementById("masculino");
    let feminino = document.getElementById("feminino");
    let naobinario = document.getElementById("naobinario");
    let semresposta = document.getElementById("semresposta");

    let web = document.getElementById("web");
    let db = document.getElementById("db");
    let redes = document.getElementById("redes");
    let engsoft = document.getElementById("engsoft");

    if(document.getElementById("nome").value == ""){
        window.alert("Campo nome obrigatório!");
        return false;
    }

    if(document.getElementById("endereco").value == ""){
        window.alert("Campo endereço obrigatório");
        return false;
    }

    if(document.getElementById("email").value == ""){
        window.alert("Campo email obrigatório!");
        return false;
    }

    if (n.lenght == 0 || isNaN (parseInt(n))) {
        window.alert("Informe um telefone válido!");
        campo.value = "";
        campo.focus();
        return false;
    }
    if(masculino.checked == false && feminino.checked == false && naobinario.checked == false && semresposta.checked == false){
        window.alert("Informe o gênero!");
        return false;
    }

    if(web.checked == false && db.checked == false && redes.checked == false && engsoft.checked == false){
        window.alert("Informe pelo menos um interesse!");
        return false;
    }
    return true;
}



function enviar() {
    let tel = document.dados.tel;

    if (validar(tel)) {
        window.alert("Dados enviados!");
    }


    

}