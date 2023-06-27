<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

//$imagem_cartao = filter_input(INPUT_POST, 'imagem_cartao', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Nome da Empresa: $nempresa <br>";

$result_cadastro = "INSERT INTO cliente (nome, nempresa, cpf, email, site, contato, endereco, cidade, estado, categoria, classificacao) VALUES ('$nome', '', '', '$email', '','','','','','', '','$senha)";

$resultado_cadastro = mysqli_query($conn, $result_cadastro);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color: green;'>Cliente cadastrado com sucesso</p>";
    header("Location: cadastra_empresa.php");
}else {
    $_SESSION['msg'] = "<p style='color: red;'>Cliente não cadastrado com sucesso</p>";
    header("Location: cadastra_empresa.php");
}

?>