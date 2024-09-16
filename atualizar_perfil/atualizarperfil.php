<?php session_start();

if ( $_SESSION["logado"] != "sim"){
   
    ?>
    <script>
        alert('Usuário não está logado.');
         window.location='../login/login.html';
    </script>

<?php }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atualizar.css">
    <script src="/atualizar_perfil/atualizar.js"></script>
    <title>Cadastro</title>

</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    <?php
//Informações do banco de dados
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";

// Criação de conexão
	$connection = mysqli_connect($servername, $username, $password, $database);
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
	//seleção de campos
	$query = " select id_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, email_usuario, senha_usuario, img_usuario from 
    usuario Where id_usuario = ".$_GET["id_usuario"];
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {	

?>


<br> <br><br>
    <div class="container">
<form id="formSalvarAtualizar" action='update.php' method="GET" onsubmit>
        <!-- Campo nome -->
    <label class="titulo">Nome</label> <br>  
        <input class="entrada" name='Nome_Cliente' id="Nome_Cliente_Atualizado" placeholder="Nome" value="<?php echo $rowp["nome_usuario"]; ?>" required> <br>
        <!-- Campo Endereço -->
    <label class="titulo">Endereço</label> <br>
        <input class="entrada" name='Endereco_Cliente' id="Endereco_Cliente_Atualizado" placeholder="Endereço" value="<?php echo $rowp["endereco_usuario"]; ?>" required>  <br>
        <!-- Campo Telefone -->
    <label class="titulo">Telefone</label> <br>
        <input class="entrada" type="tel" max="11"name='Telefone_Cliente' id="Telefone_Cliente_Atualizado" placeholder="(00)90000-0000" value="<?php echo $rowp["telefone_usuario"]; ?>" required> <br>
        <!-- Campo CPF -->
    <label class="titulo">CPF</label> <br>
        <input class="entrada" min="11" max="11"name='Cpf_Cliente' id="CPF_Cliente_Atualizado" placeholder="000.000.000-00" value="<?php echo $rowp["cpf_usuario"]; ?>" required > <br>
        <!-- Campo Data de nascimento -->
    <label class="titulo">Data de Nascimento</label> <br>
        <input class="entrada" min="1900-01-01" max="2050-12-31" type="date" name='Data_Nascimento_Cliente' id="Data_Cliente_Atualizado" placeholder="DD/MM/AAAA" value="<?php echo $rowp["data_nascimento_usuario"]; ?>" required> <br>
        <!-- Campo Email -->
    <label class="titulo">Email</label> <br>
        <input class="entrada" type="email" max="70" name='Email_Cliente' id="Email_Cliente_Atualizado" placeholder="Email" value="<?php echo $rowp["email_usuario"]; ?>"  required > <br>
        <!-- Campo senha -->
    <label class="titulo">Senha</label>
        <input class="entrada" type="password" min="5" max="10" name="Senha_Cliente" id="Senha_cliente_Atualizado" placeholder="Senha" value="<?php echo $rowp["senha_usuario"]; ?>" required><br>
    <input class="entrada" type="hidden" name="Id_Cliente" id="Id_Cliente" value="<?php echo $_GET["id_usuario"]; ?>"><br>
    <?php      
    };
    ?>
    <input class="enviar" type=button value="Atualizar" onclick="fnAtualizar();">

</form> 

</body>
</html>