<?php
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
if (isset($_FILES['img_usuario']) && $_FILES['img_usuario']['error'] === UPLOAD_ERR_OK) {
    $targetDir = 'assets'; 
    $targetFile = $targetDir . basename($_FILES['img_usuario']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verifica se o arquivo é uma imagem válida
    $allowedExtensions = array('jpg', 'jpeg', 'png');
    if (in_array($imageFileType, $allowedExtensions)) {
        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES['img_usuario']['tmp_name'], $targetFile)) {
            // Caminho da imagem para salvar no banco de dados
            $imgUsuario = $targetFile;

            // Aplicar criptografia MD5 à senha
            $senhaCriptografada = md5($_POST["senha_usuario"]);

            // Comandos de transferência (PHP - SQL)
            $query = "INSERT INTO usuario (email_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, senha_usuario, img_usuario, tipo_usuario)
                      VALUES ('".$_POST["email_usuario"]."', '".$_POST["nome_usuario"]."', '".$_POST["endereco_usuario"]."', '".$_POST["telefone_usuario"]."', 
                      '".$_POST["cpf_usuario"]."', '".$_POST["data_nascimento_usuario"]."', '".$senhaCriptografada."', '".$imgUsuario."','2');";

            // Confirmação do salvamento
            mysqli_query($connection, $query) or die ('Erro ao salvar: ' . mysqli_error($connection));
            echo "Salvo com sucesso";

            $query = "SELECT id_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, email_usuario, senha_usuario 
                      FROM usuario 
                      WHERE email_usuario = '".$_POST["email_usuario"]."' AND senha_usuario = '".$senhaCriptografada."';";

            $resp = mysqli_query($connection, $query) or die ('Erro ao consultar: ' . mysqli_error($connection));
            $_SESSION["logado"] = "nao";
            while ($rowp = mysqli_fetch_array($resp)) {
                $_SESSION["id_usuario"] = $rowp["id_usuario"];
            }

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




