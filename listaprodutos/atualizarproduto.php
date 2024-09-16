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
    <link rel="stylesheet" href="atualizarproduto.css">
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
	$query = " select id_produto, nome_produto, preco_produto, descricao_produto, quantidade_produto, img_produto from 
    produto Where id_produto = ".$_GET["id_produto"];
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {	

?>


<br> <br><br>
    <div class="container">
<form id="formSalvarAtualizar" action='updateproduto.php' method="GET" onsubmit>
    <!-- Campo nome_produto -->
<label class="titulo">Nome do produto</label> <br>  
<input class="entrada" name='nome_produto' id="nome_produto_atualizado" placeholder="Nome do produto" value="<?php echo $rowp["nome_produto"]; ?>" required> <br>

<!-- Campo preco_produto -->
<label class="titulo">Preço</label> <br>
<input class="entrada" name='preco_produto' id="preco_produto_atualizado" placeholder="Preço" value="<?php echo $rowp["preco_produto"]; ?>" required>  <br>

<!-- Campo descricao_produto -->
<label class="titulo">Descrição</label> <br>
<input class="entrada" name='descricao_produto' id="descricao_produto_atualizado" placeholder="Coloque a descrição do produto" value="<?php echo $rowp["descricao_produto"]; ?>" required> <br>

<!-- Campo quantidade_produto -->
<label class="titulo">Quantidade</label> <br>
<input class="entrada" name='quantidade_produto' id="quantidade_produto_atualizado" placeholder="Quantidade" value="<?php echo $rowp["quantidade_produto"]; ?>" required> <br>

<!-- Campo img_produto -->
<label class="titulo">Foto do produto</label>
<input class="imagem" type="file" name="img_produto" id="img_produto" accept="image/*" required><br>

    <?php      
    };
    ?>
    <input class="enviar" type=button value="Atualizar" onclick="fnAtualizar();">

</form> 

</body>
</html>