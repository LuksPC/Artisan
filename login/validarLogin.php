<?php
session_start();
?>

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

<header class="topo">
    <img src="../assets/Logo.png" alt="Logo" class="logo">
    <a href="../index.html">
        <button class="voltar">Voltar</button>
    </a>
</header>

<?php
// Database Info
$servername = "localhost";
$database = "u553234134_Artisan";
$username = "u553234134_Gizaac";
$password = "Gizaac12343124";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Seleção de campos
$query = "SELECT id_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, email_usuario, senha_usuario, tipo_usuario
FROM usuario
WHERE email_usuario = '" . $_POST["Email_Cliente"] . "' AND senha_usuario = '" . md5($_POST["Senha_Cliente"]) . "'";
$resp = mysqli_query($connection, $query) or die('Erro ao consultar..');

$_SESSION["logado"] = "nao";
while ($rowp = mysqli_fetch_array($resp)) {
    $_SESSION["Id_Cliente"] = $rowp["id_usuario"];
    $_SESSION["tipo_usuario"] = $rowp["tipo_usuario"];
    $logado = "sim";
}

if ($logado != "sim") {
    ?>
    <script>
        alert('Email ou senha inválidos.');
        window.location = '../login/login.html';
    </script>
    <?php
} elseif ($_SESSION['tipo_usuario'] == 2) {
    ?>
    <script>
        alert('Usuário logado como vendedor.');
        window.location = '../home/homevendedor.php';
    </script>
    <?php
} elseif ($_SESSION['tipo_usuario'] != 3) {
    ?>
    <script>
        alert('Usuário logado como usuário.');
        window.location = '../home/home.php';
    </script>
    <?php
} else {
    $_SESSION["logado"] = "sim";
    ?>
    <script>
        alert('Usuário logado como admin.');
        window.location = '../listar_usuarios/listarUsuarios.php';
    </script>
    <?php
}

mysqli_close($connection);
?>

</body>
</html>


