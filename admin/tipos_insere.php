<?php
include "../conn/connect.php";
include "acesso_com.php";

if ($_POST){
    $tipo = $_POST['tipo'];
    $sigla = $_POST['sigla'];

    $insereTipo = "INSERT INTO tipos
    (rotulo, sigla) VALUES
    ('$tipo', '$sigla')";

    $resultadoo = $conn->query($insereTipo);
    if(mysqli_insert_id($conn)){
        header('location:tipos_lista.php');
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
    <title>Tipo - Insere</title>
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
                Inserindo Tipos
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="tipos_insere.php" method="post" 
                    name="form_insere" enctype="multipart/form-data"
                    id="form_insere">
                        <label for="id_tipo">Tipo</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="tipo" id="tipo" 
                                class="form-control" placeholder="Digite o tipo"
                                maxlength="100" required>
                        </div>
                        <label for="destaque">Sigla</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="sigla" id="sigla" 
                                class="form-control" placeholder="Digite a sigla"
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