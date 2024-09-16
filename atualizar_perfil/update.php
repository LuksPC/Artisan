
<?php


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
//Atualização dos dados do banco
$query = " UPDATE usuario SET nome_usuario = '".$_GET["nome_usuario"]."', endereco_usuario = '".$_GET["endereco_usuario"]."', telefone_usuario = '".$_GET["telefone_usuario"]."', 
cpf_usuario = '".$_GET["cpf_usuario"]."', data_nascimento_usuario = '".$_GET["data_nascimento_usuario"]."', email_usuario = '".$_GET["email_usuario"]."',
 senha_usuario = '".$_GET["senha_usuario"]."' WHERE id_usuario = '".$_GET["id_usuario"]."' ";
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";


?>

<script>
    window.location='../listar_usuarios/listarUsuarios.php';
</script>
