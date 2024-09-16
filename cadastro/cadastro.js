//      ##########campos obrigatórios##########
function fnValidar(){
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
 