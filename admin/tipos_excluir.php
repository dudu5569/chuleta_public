<?php
include "../conn/connect.php";
include "acesso_com.php";

$id = $_GET['id'];
$excluiProduto = "DELETE FROM tipos WHERE id=$id";
$resultado = $conn->query($excluiProduto);
header ("location: tipos_lista.php");
?>