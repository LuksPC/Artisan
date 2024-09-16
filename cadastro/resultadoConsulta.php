<?php
//Informações do banco
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";

//Criação da conexão
	$connection = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}

	//seleção de campos
	$query = " select Id_Cliente from Cliente ";

	//con
	echo $query;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {							
											
	//buscando do campo do banco de dados DT_DE_ALTERACAO.
	echo "<BR/><a href='cadastro.php?Id_Cliente=".$rowp["Id_Cliente"]."'>ALTERAR ID ".$rowp["Id_Cliente"]."</a> ";
	};
?>

