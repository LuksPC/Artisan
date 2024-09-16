<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Dados do banco
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

// Verifica se um arquivo de imagem foi enviado
if (isset($_FILES['img_produto']) && $_FILES['img_produto']['error'] === UPLOAD_ERR_OK) {
    $targetDir = 'assets'; 
    $targetFile = $targetDir . basename($_FILES['img_produto']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verifica se o arquivo é uma imagem válida
    $allowedExtensions = array('jpg', 'jpeg', 'png');
    if (in_array($imageFileType, $allowedExtensions)) {
        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES['img_produto']['tmp_name'], $targetFile)) {
            // Caminho da imagem para salvar no banco de dados
            $imgProduto = $targetFile;

            // Comandos de transferência (PHP - SQL)
            $query = "INSERT INTO produto (nome_produto, preco_produto, descricao_produto, quantidade_produto, img_produto)
                      VALUES ('".$_POST["nome_produto"]."', '".$_POST["preco_produto"]."', '".$_POST["descricao_produto"]."', '".$_POST["quantidade_produto"]."', '".$imgProduto."');";

            // Confirmação do salvamento
            mysqli_query($connection, $query) or die ('Erro ao salvar: ' . mysqli_error($connection));
            echo "Salvo com sucesso";

            // Redirecionar para a página de destino
            echo '<script>window.location = "../home/home.php";</script>';

        } else {
            echo "Erro ao fazer upload do arquivo.";
        }
    } else {
        echo "Apenas arquivos JPG, JPEG e PNG são permitidos.";
    }
} else {
    echo "Nenhum arquivo de imagem foi enviado.";
}

mysqli_close($connection);

?>

