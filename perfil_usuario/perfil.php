<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
    </header>

</head>
<body>
    <link rel="icon" href="../assets/Logo.png">
    <header 
            class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">

            <a href="./login/login.html">
                <button class="login">Entrar</button>
            </a>

    </header>
    
    <div class="corpo-esq">
        
    <li>Perfil
        <ul>
            <li><a href='../atualizar_perfil/atualizarperfil.php?Id_Cliente=<?php echo $_SESSION["Id_Cliente"];  ?>'> Alterar dados do cadastro</a></li>
            <li><a href='../delete_cliente/delete.php?Id_Cliente=<?php echo $rowp["Id_Cliente"];  ?>'><label>Deletar<label></a></li>
            <li><a href='../delete_cliente/delete.php?Id_Cliente=<?php echo $_SESSION["Id_Cliente"];  ?>'>Deletar perfil</a></li>
            <li><a href='../listar_usuarios/listarUsuarios.php'>listar Clientes</a></li>
        </ul>
    </li>

    </div>

    <div class="corpo-dir">
        aside
    </div>

    <footer>
        
    </footer>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>