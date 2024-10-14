<?php
include "../conn/connect.php";
include "acesso_com.php";

$id = $_GET['id'];
$excluiProduto = "DELETE FROM usuarios WHERE id=$id";
$resultado = $conn->query($excluiProduto);
header ("location: usuarios_lista.php");
?>