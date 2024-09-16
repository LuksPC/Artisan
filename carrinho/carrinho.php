<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrinho.css">
    <title>Cadastro</title>
</head>

<body>
    <header class="topo">
        <img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    
    <br> <br><br>
    <div class="container">
        <form id="formSalvar" action="finalizarcompra.php" method="POST">
            <label for="produto1">Produto 1</label>
            <input type="checkbox" name="produtos[]" value="produto1">
            <label for="quantidade1">Quantidade:</label>
            <input type="number" name="quantidades[]" value="1">

            <input class="Finalizar" type="submit" value="Finalizar Compra">
        </form>

        <a href="resultadoConsulta.php">Listar Produtos</a>
    </div>

    <!-- Inclua a biblioteca SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

    <!-- Verifica se a mensagem de compra finalizada está definida na sessão -->
    <script>
        <?php if (isset($_SESSION['compra_finalizada'])) { ?>
            // Exibe o popup informando que a compra foi finalizada
            Swal.fire({
                title: 'Compra Finalizada',
                text: 'Sua compra foi concluída com sucesso!',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        <?php
            // Remove a mensagem da sessão para não exibi-la novamente após um novo carregamento da página
            unset($_SESSION['compra_finalizada']);
        ?>
        <?php } ?>
    </script>
</body>
</html>