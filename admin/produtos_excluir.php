<?php
include "../conn/connect.php";
include "acesso_com.php";

$id = $_GET['id'];
$excluiProduto = "DELETE FROM produtos WHERE id=$id";
$resultado = $conn->query($excluiProduto);
header ("location: produtos_lista.php");
?>