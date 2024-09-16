
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
$query = " UPDATE produto SET nome_produto = '".$_GET["nome_produto"]."', preco_produto = '".$_GET["preco_produto"]."', descricao_produto = '".$_GET["descricao_produto"]."', 
quantidade_produto = '".$_GET["quantidade_produto"]."', img_produto = '".$_GET["img_produto"]."' WHERE id_produto = '".$_GET["id_produto"]."' ";
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";


?>

<script>
    window.location='../listaprodutos/listaprodutos.php';
</script>
