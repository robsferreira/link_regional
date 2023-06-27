<?php

session_start();

include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nempresa = filter_input(INPUT_POST, 'nempresa', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$site = filter_input(INPUT_POST, 'site', FILTER_SANITIZE_STRING);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$classificacao = filter_input(INPUT_POST, 'classificacao', FILTER_SANITIZE_STRING);
//$imagem_cartao = filter_input(INPUT_POST, 'imagem_cartao', FILTER_SANITIZE_STRING);

// echo "Nome: $nome <br>";
// echo "Nome da Empresa: $nempresa <br>";

$result_cadastro = "UPDATE cliente SET nome='$nome', nempresa='$nempresa', cpf='$cpf',site='$site',contato='$contato',endereco='$endereco', cidade='$cidade',estado='$estado',categoria='$categoria',classificacao='$classificacao' WHERE id='$id'";

$resultado_cadastro = mysqli_query($conn, $result_cadastro);

if(mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color: green;'>Cliente Atualizado com sucesso</p>";
    header("Location: index_admin.php");
}else {
    $_SESSION['msg'] = "<p style='color: red;'>Cliente não Atualizado com sucesso</p>";
    header("Location: edit_cliente.php?id=$id");
}

?>