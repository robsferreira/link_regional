<?php
session_start();
$btnCadUsuario = filter_input(INPUT_POST,'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
    include_once("conexao.php");
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $erro = false;
    $dados_st = array_map('strip_tags', $dados_rc);
    $dados = array_map('trim', $dados_st);

    if(in_array('', $dados))
    {
        $erro = true;
        $_SESSION['msg'] = "Necessario preencher todos os campos!!";
        header("Location: cadastra_cliente.php");
    }elseif(strlen($dados['senha'])  < 6){
        $erro = true;
        $_SESSION['msg'] = "A senha deve ter pelo menos 6 caracteres!!";
        header("Location: cadastra_cliente.php");
    }elseif(stristr($dados['senha'],"'")){
        $erro = true;
        $_SESSION['msg'] = "Caracter (') inválido!!";
        header("Location: cadastra_cliente.php");
    }else{
        $result_usuario = "SELECT id FROM cliente WHERE email = '".$dados['email']."'";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
            $erro = true;
             $_SESSION['msg'] = "Este email já esta cadastrado!!";
            header("Location: cadastra_cliente.php");
        }
    }


    if(!$erro){
            $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
        $result_cadastro = "INSERT INTO cliente (nome, email, senha) VALUES ('".$dados['nome']."','".$dados['email']."','".$dados['senha']."')";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);

        if(mysqli_insert_id($conn)) {
            $_SESSION['msg'] = "<p style='color: green;'>Cliente cadastrado com sucesso</p>";
            header("Location: login.php");
        }else {
            $_SESSION['msg'] = "<p style='color: red;'>Cliente não cadastrado com sucesso</p>";
            header("Location: cadastra_cliente.php");
        }
    }

}

?>
