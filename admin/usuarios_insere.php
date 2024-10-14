<?php
include "../conn/connect.php";
include "acesso_com.php";

if ($_POST){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $insereTipo = "INSERT INTO usuarios
    (login, senha, nivel) VALUES
    ('$login', md5('$senha'), '$nivel')";

    $resultadoo = $conn->query($insereTipo);
    if(mysqli_insert_id($conn)){
        header('location:usuarios_lista.php');
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Usuário - Insere</title>
</head>
<body>
<?php include "menu_adm.php";?>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="produtos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo Usuários
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="usuarios_insere.php" method="post" 
                    name="form_insere" enctype="multipart/form-data"
                    id="form_insere">
                        <label for="login">Login:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="login" id="login" 
                                class="form-control" placeholder="Digite o login"
                                maxlength="100" required>
                        </div>
                        <label for="senha">Senha:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="senha" id="senha" 
                                class="form-control" placeholder="Digite a senha"
                                maxlength="100" required>
                        </div>
                        <label for="nivel">Nivel:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="nivel" id="nivel" 
                                class="form-control" placeholder="Digite o nivel"
                                maxlength="100" required>
                        </div>
                        

                        <br>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</html>