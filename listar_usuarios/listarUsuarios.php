<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <link rel="stylesheet"  media="(min-width: 601px)" href="listar.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="listarmedia.css" />
    <title>Cadastro</title>
</head>

<body>
<!-- cabeçalho -->
<header class="topo">
    <a href="../home/homeadmin.php">
        <img src="../assets/Logo.png" alt="Logo" class="logo">
    </a>
</header>

<br> <br><br>
<div class="container">

    <!-- informações do banco de dados -->
    <?php
    $servername = "localhost";
    $database = "u553234134_Artisan";
    $username = "u553234134_Gizaac";
    $password = "Gizaac12343124";

    // criando a conexão
    $connection = mysqli_connect($servername, $username, $password, $database);

    // checando a conexão
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // selecionando os campos do banco
    $query = ' select id_usuario, nome_usuario, img_usuario from usuario ';
    $resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

    while ($rowp = mysqli_fetch_array($resp)) {
    ?>

        <!-- lista desordenada dos usuarios -->
        <ul>
            <li class="lista ">

                <a href='../atualizar_perfil/atualizarperfil.php?id_usuario=<?php echo $rowp["id_usuario"];  ?>'><label>Editar<label/></a>
                <a href='../delete_cliente/delete.php?id_usuario=<?php echo $rowp["id_usuario"];  ?>'><label>Deletar<label></a> </li><br> <br>

            <main>
                <div class="list">
                    <div class="line">
                        <div class="user">
                            <div class="profile">
                                <?php if (!empty($rowp['img_usuario'])) { ?>
                                    <img src="<?php echo $rowp['img_usuario']; ?>" alt="Imagem do Usuário">
                                <?php } else { ?>
                                    <img src="/assets/user-image.png" alt="Imagem Padrão">
                                <?php } ?>
                            </div>
                            <div class="details">
                                <h1 class="name"><?php echo $rowp["nome_usuario"]  ?></h1>
                                <h3 class="username"><?php echo $rowp["id_usuario"]; ?></h3>
                            </div>
                        </div>
                        <div class="status">
                            <span></span>
                            <p>Ativo</p>
                        </div>
                        <div class="location">
                            <p>Brasília</p>
                        </div>
                        <div class="phone">
                            <p><?php echo $rowp["telefone_usuario"]; ?></p>
                        </div>
                        <div class="contact">
                            <a href="mailto:<?php echo $rowp["email_usuario"]  ?>" class="btn">Contact</a>
                        </div>
                        <div class="action">
                            <div>
                                <summary class="icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>

                                    <div id="myDropdown2" class="dropdown-content">
                                        <a href="#home">Home</a>
                                        <a href="#about">About</a>
                                        <a href="#contact">Contact</a>
                                    </div>
                                </summary>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </ul>

    <?php 
    };
    ?>

</form> 
<!-- <script src="/cadastro/cadastro.js"></script> -->
<script src="/listar.js"></script>
</body>
</html>
































