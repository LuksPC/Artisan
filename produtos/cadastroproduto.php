<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  media="(min-width: 601px)" href="cadastro.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="cadastromedia.css" />
    <title>Cadastro</title>
</head>

<body>

    <header class="topo">
        <a href="..http://artisan.gzaac.com.br">
            <img src="../assets/Logo.png" alt="Logo" class="logo">
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
    <form id="formSalvar" action='salvarproduto.php' method="POST" enctype = "multipart/form-data" onsubmit>
            <!-- Campo nome -->
            <label class="titulo">Nome do produto</label> <br>  
                <input class="entrada" name='nome_produto' id="nome_produto" placeholder="Nome do produto" required> <br>
            <!-- Campo Preço -->
            <label class="titulo">Preço</label> <br>
                <input class="entrada" name='preco_produto' id="preco_produto" placeholder="Preço" required>  <br>
            <!-- Campo Descrição -->
            <label class="titulo">Descrição</label> <br>
                <input class="entrada"  name='descricao_produto' id="descricao_produto" placeholder="Coloque a descrição do produto"  required> <br>
            <!-- Campo Quantidade -->
            <label class="titulo">Quantidade do produto</label> <br>
                <input class="entrada"  name='quantidade_produto' id="quantidade_produto" placeholder="Defina a quantidade de produto" required> <br>
            <!-- Campo foto -->
            <label class="titulo">Foto do produto</label>
                        <input class = "imagem" type = "file" name = " Img_Produto"><br>

            <!-- Validação -->
            <input class="enviar" type=button id="btn" value="Enviar" onclick="fnValidar();">
        </form> 
 <script src="/cadastro/cadastro.js"></script>
</body>
</html>