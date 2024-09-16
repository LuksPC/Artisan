//      ##########campos obrigatórios##########
function fnFinalizar(){
    if (document.getElementById("nome_usuario").value==0){
        alert("Campo nome é obrigatório");
        document.getElementById("nome_usuario").focus();
     return false
    }

    if (document.getElementById("endereco_usuario").value==0){
        alert("Campo endereço é obrigatório");
        document.getElementById("endereco_usuario").focus();
     return false
    }
    if (document.getElementById("telefone_usuario").value==0){
        alert("Campo telefone é obrigatório");
        document.getElementById("telefone_usuario").focus();
     return false
    }

    if (document.getElementById("cpf_usuario").value==0){
        alert("Campo CPF é obrigatório");
        document.getElementById("cpf_usuario").focus();
     return false
    }

    if (document.getElementById("data_usuario").value==0){
        alert("Campo data de nascimento é obrigatório");
        document.getElementById("data_usuario").focus();
     return false
    }
    if (document.getElementById("email_usuario").value==0){
        alert("Campo email é obrigatório");
        document.getElementById("email_usuario").focus();
     return false
    }
    if (document.getElementById("senha_usuario").value==0){
        alert("Campo senha é obrigatório");
        document.getElementById("senha_usuario").focus();
     return false
    }
    
    document.getElementById("formSalvar").submit();
 }
 /*function mascara_cpf(){
    var cpf = document.getElementById('CPF_Cliente')
    if(cpf.value.lenght == 4 || cpf.value.lenght == 8){
        cpf.value = cpf.value += "."
    }else if(cpf.value.lenght == 12){
        cpf.value = cpf.value += "-"
    }
    alert("funcionou");
 }
 function mascara_telefone(){
    var cpf = document.getElementById('CPF_Cliente')
    if(cpf.value.lenght == 1){
        cpf.value = cpf.value += "("
    }else if(cpf.value.lenght == 4){
        cpf.value = cpf.value += ")"
    }else if(cpf.value.lenght == 10){
        cpf.value = cpf.value += "-"
    }
    alert("funcionou");
}*/
//Função para caso apertar enter, o botão aceita o comando
            /*document.addEventListener("keypress", function(e) {
                if(e.key === 'Enter') {
                    var btn = document.getElementById("btn");
                    btn.click();
                }
});*/ 