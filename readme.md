# Artisan

Artisan se trata de um projeto feito em aula, que consiste em um sistema de gerenciamento de estoque de estabelecimentos destinados a artesanato.
o mesmo possui conexão com banco de dados de clientes e funcionários, sistema de pedidos de matérias primas e venda de produtos.

**Participantes**:
**Lucas Pereira Cavalcante**;
**Guilherme Izaac Ferreira**;
**Guilherme Henrique da Costa Nascimento**;


<?php
//dados do banco
    $servername = "localhost";
    $database = "u553234134_Artisan";
    $username = "u553234134_Gizaac";
    $password = "Gizaac12343124";

// Criação de conexão
    $connection = mysqli_connect($servername, $username, $password, $database);



// Checagem de conexão
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
//Comandos de transferencia(PHP - SQL)
    $query = " INSERT INTO usuario
        (email_usuario , nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, senha_usuario)
    VALUES('".$_POST["email_usuario"]."', '".$_POST["nome_usuario"]."', '".$_POST["endereco_usuario"]."','".$_POST["telefone_usuario"]."', 
        '".$_POST["cpf_usuario"]."', '".$_POST["data_nascimento_usuario"]."',('".$_POST["senha_usuario"]."'));";

//Confirmação do salvamento
    echo $query;
    mysqli_query($connection,$query) or die ('Erro ao salvar..');
    echo "Salvo com sucesso";

        $query = " select id_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, email_usuario, senha_usuario from 
        usuario Where email_usuario = '".$_POST["email_usuario"]."' and senha_usuario = '".$_POST["senha_usuario"]."'" ;
        $resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');
        $_SESSION["logado"]=  "nao";
        while ($rowp = mysqli_fetch_array($resp)) {	        
            $_SESSION["id_usuario"]=  $rowp["id_usuario"];   
        };

        ?>


    <script>
        window.location='../listar_usuarios/listarUsuarios.php';
    </script>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atualizar.css">
    <title>Cadastro</title>
</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    <?php
//DB Info
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";

// Create connection
	$connection = mysqli_connect($servername, $username, $password, $database);
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
//seleção de campos
	$query = " select Id_Cliente, Nome_Cliente, Endereco_Cliente, Telefone_Cliente, CPF_Cliente, Data_Nascimento_Cliente, Email_Cliente, Senha_Cliente from 
    Cliente Where Email_Cliente = '".$_POST["Email_Cliente"]."' and Senha_Cliente = '".$_POST["Senha_Cliente"]."'" ;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');
    $_SESSION["logado"]=  "nao";
	while ($rowp = mysqli_fetch_array($resp)) {	
        $logado=  "sim";
        $_SESSION["Id_Cliente"]=  $rowp["Id_Cliente"];
?>
Logado com sucesso:<?php echo $rowp["Nome_Cliente"]; ?>
    <?php      
    };
    if ( $logado != "sim"){
   
        ?>
        <script>
            alert('Usuário ou senha inválidos.');
            window.location='../login/login.html';
        </script>

   <?php  
    }else {
        $_SESSION["logado"]="sim";
        ?>
        <script>
            alert('Usuário logado com sucesso.');
            window.location='../listar_usuarios/listarUsuarios.php';
        </script>

   <?php 
    }
    ?>


</body>
</html>
