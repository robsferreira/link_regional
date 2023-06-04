<?php

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){

$result_cliente = "DELETE FROM cliente WHERE id='$id'";
$resultado_cliente = mysqli_query($conn, $result_cliente);

if(mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color: green;'>Cliente Deletado com sucesso</p>";
    header("Location: listar.php");
}else{
    $_SESSION['msg'] = "<p style='color: red;'>Erro Cliente Não Deletado com sucesso</p>";
    header("Location: listar.php");
}
}else{
    $_SESSION['msg'] = "<p style='color: red;'>Necessário Selecionar um Registro para ser Deletado</p>";
    header("Location: listar.php");
}

?>