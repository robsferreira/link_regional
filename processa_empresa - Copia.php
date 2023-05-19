<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nempresa = filter_input(INPUT_POST, 'nempresa', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$site = filter_input(INPUT_POST, 'site', FILTER_SANITIZE_STRING);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$classificacao = filter_input(INPUT_POST, 'classificacao', FILTER_SANITIZE_STRING);
//$imagem_cartao = filter_input(INPUT_POST, 'imagem_cartao', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Nome da Empresa: $nempresa <br>";

$result_cadastro = "INSERT INTO cliente (nome, nempresa, cpf, email, site, contato, endereco, cidade, estado, categoria, classificacao) VALUES ('$nome', '$nempresa', '$cpf', '$email', '$site','$contato','$endereco','$cidade','$estado','$categoria', '$classificacao')";

$resultado_cadastro = mysqli_query($conn, $result_cadastro);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color: green;'>Cliente cadastrado com sucesso</p>";
    header("Location: cadastra_cliente.php");
}else {
    $_SESSION['msg'] = "<p style='color: red;'>Cliente não cadastrado com sucesso</p>";
    header("Location: cadastra_cliente.php");
}

?>