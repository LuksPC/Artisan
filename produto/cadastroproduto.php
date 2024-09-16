<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  media="(min-width: 601px)" href="cadastroproduto.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="cadastromedia.css" />
    <title>Cadastro</title>
</head>

<body>

    <header class="topo">
        <a href="../home/home.php">
            <img src="../assets/Logo.png" alt="Logo" class="logo">
        </a>
    </header>
    
    <br> <br><br>
    <div class="container">
        <form id="formSalvar" action="salvarproduto.php" method="POST" enctype="multipart/form-data">
            <!-- Campo nome_produto -->
            <label class="titulo" for="nome_produto">Nome do produto</label> <br>  
            <input class="entrada" type="text" name="nome_produto" id="nome_produto" placeholder="Nome do produto" required> <br>

            <!-- Campo preco_produto -->
            <label class="titulo" for="preco_produto">Preço</label> <br>
            <input class="entrada" type="number" name="preco_produto" id="preco_produto" placeholder="Preço" min="1" required>  <br>

            <!-- Campo descricao_produto -->
            <label class="titulo" for="descricao_produto">Descrição</label> <br>
            <input class="entrada" type="text" name="descricao_produto" id="descricao_produto" placeholder="Coloque a descrição do produto" required> <br>

            <!-- Campo quantidade_produto -->
            <label class="titulo" for="quantidade_produto">Quantidade</label> <br>
            <input class="entrada" type="number" name="quantidade_produto" id="quantidade_produto" placeholder="Quantidade" min="1" required> <br>

            <!-- Campo img_produto -->
            <label class="titulo" for="img_produto">Foto do produto</label>
            <input class="imagem" type="file" name="img_produto" id="img_produto" accept="image/*" required><br>

            <!-- Validação -->
            <input class="enviar" type="submit" id="btn" value="Enviar">
        </form> 
        <script src="/cadastro/cadastro.js"></script>
    </div>
</body>
</html>
