<?php
session_start(); // Inicia a sessão (se já não estiver iniciada)

// Verifica se o usuário está logado
if ($_SESSION["logado"] !== "sim") {
    // Usuário não está logado, redirecione para a página de login ou exiba uma mensagem de erro.
    header("Location: /cadastro/cadastro.php"); // Redireciona para a página de login
    exit; // Encerra a execução do script atual
}

// Resto do código para processar a finalização da compra

// Verifica se o ID do produto foi passado corretamente
if (isset($_POST['id_produto'])) {
    // ID do produto foi passado
    $produtoId = $_POST['id_produto'];
    echo "ID do produto: " . $produtoId . "<br>"; // Exibe o ID do produto (apenas para depuração)

    // Dados do banco de dados
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

    // Comandos de transferência (PHP - SQL)
    $insertQuery = "INSERT INTO venda (data_venda, finalizada_venda) VALUES (NOW(), 1);";

    // Tentativa de salvar os dados no banco
    if (mysqli_query($connection, $insertQuery)) {
        // Os dados foram salvos com sucesso

        // Atualizar o estoque do produto
        $Query = "UPDATE produto SET quantidade_produto = quantidade_produto - 1 WHERE id_produto = $produtoId";

        // Tentativa de atualizar o estoque
        if (mysqli_query($connection, $updateQuery)) {
            echo "Dados salvos e estoque atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o estoque: " . mysqli_error($connection);
        }
    } else {
        // Houve um erro ao salvar os dados
        echo "Erro ao salvar os dados: " . mysqli_error($connection);
    }

    mysqli_close($connection);

    // Armazena a mensagem de sucesso na sessão
    $_SESSION['compra_finalizada'] = true;

    // Redireciona o usuário de volta para a página inicial
    header('Location: /home/home.php');
    exit;
} else {
    // ID do produto não foi passado
    echo "ID do produto não foi fornecido.";
    exit;
}
?>









