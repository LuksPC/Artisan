<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
<form id="formSalvar" action='salvar.php' method="POST" onsubmit>
    <label class="titulo">Nome do produto</label> <br>  
            <input class="entrada" name='nome_produto' id="nome_produto" placeholder="Nome do produto" required> <br> 
    <label class="titulo">Preço</label> <br>
            <input class="entrada" name='preco_produto' id="preco_produto" placeholder="Preço" required>  <br>
    <label class="titulo">Descrição</label> <br>
            <input class="entrada"  name='descricao_produto' id="descricao_produto" placeholder="Coloque a descrição do produto"  required> <br>
    <label class="titulo">Quantidade do produto</label> <br>
            <input class="entrada"  name='quantidade_produto' id="quantidade_produto" placeholder="Defina a quantidade de produto" required> <br>
    <label class="titulo">Foto do produto</label>
             <input class = "imagem" type = "file" name = " Img_Produto"><br>

            <!-- Validação -->
            <input class="enviar" type=button id="btn" value="Enviar" onclick="fnValidar();">
    <input class="entrada" type="hidden" name="id_produto" id="id_produto" value="<?php echo $_POST["id_produto"]; ?>"><br>
        

<input class="enviar" type=button value="Enviar" onclick="fnValidar();">

<a href="resultadoConsulta.php">listar Produtos</a>
</form> 
</body>
</html>