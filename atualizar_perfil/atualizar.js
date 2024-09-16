//      ##########campos obrigatórios##########
function fnAtualizar() {
  if (document.getElementById("Nome_Cliente_Atualizado").value == 0) {
    alert("Campo nome é obrigatório");
    document.getElementById("Nome_Cliente_Atualizado").focus();
    return false;
  }

  if (document.getElementById("Endereco_Cliente_Atualizado").value == 0) {
    alert("Campo endereço é obrigatório");
    document.getElementById("Endereco_Cliente_Atualizado").focus();
    return false;
  }
  if (document.getElementById("Telefone_Cliente_Atualizado").value == 0) {
    alert("Campo telefone é obrigatório");
    document.getElementById("Telefone_Cliente_Atualizado").focus();
    return false;
  }

  if (document.getElementById("CPF_Cliente_Atualizado").value == 0) {
    alert("Campo CPF é obrigatório");
    document.getElementById("CPF_Cliente_Atualizado").focus();
    return false;
  }

  if (document.getElementById("Data_Cliente_Atualizado").value == 0) {
    alert("Campo data de nascimento é obrigatório");
    document.getElementById("Data_Cliente_Atualizado").focus();
    return false;
  }
  if (document.getElementById("Email_Cliente_Atualizado").value == 0) {
    alert("Campo email é obrigatório");
    document.getElementById("Email_Cliente_Atualizado").focus();
    return false;
  }
  if (document.getElementById("Senha_cliente_Atualizado").value == 0) {
    alert("Campo senha é obrigatório");
    document.getElementById("Senha_cliente_Atualizado").focus();
    return false;
  }
  document.getElementById("formSalvarAtualizar").submit();
}
