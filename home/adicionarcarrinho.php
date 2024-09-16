<?php
$servername = "localhost";
$database = "u553234134_Artisan";
$username = "u553234134_Gizaac";
$password = "Gizaac12343124";

// Criando a conexão com o banco de dados
$connection = mysqli_connect($servername, $username, $password, $database);

// Verificando a conexão
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Verificando se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os dados do produto a ser adicionado ao carrinho
    $usuarioId = $_POST['id_usuario'];
    $produtoId = $_POST['id_produto'];
    $precoProduto = $_POST['preco_produto'];

 

    echo "Usuario ID: " . $usuarioId . "<br>";
    echo "Produto ID: " . $produtoId . "<br>";
    echo "Preço Produto: " . $precoProduto . "<br>";

    // Exemplo de inserção do produto no carrinho
    $sql = "INSERT INTO carrinho (usuario_id_usuario, produto_id_produto, preco_total_venda, data_venda, finalizada_venda)
            VALUES ($usuarioId, $produtoId, $precoProduto, NOW(), 0)"; // Supondo que o ID do usuário logado seja 1

    echo "SQL: " . $sql . "<br>";

    if (mysqli_query($connection, $sql)) {
        // Operação concluída com sucesso
        $response = array('success' => true, 'message' => 'Produto adicionado ao carrinho com sucesso.');
        echo json_encode($response);
    } else {
        // Erro na operação
        $response = array('success' => false, 'message' => 'Erro ao adicionar produto ao carrinho: ' . mysqli_error($connection));
        echo json_encode($response);
    }
}

// Fechando a conexão com o banco de dados
mysqli_close($connection);
?>

