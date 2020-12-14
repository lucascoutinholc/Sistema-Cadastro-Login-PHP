<?php
    session_start();
    include_once("conexao.php");

    if (empty($_POST['nome']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
    }

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    $result_usuario = "SELECT id, nome FROM usuario 
        WHERE nome='{$nome}' and senha='{$senha}'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    $linha = mysqli_num_rows($resultado_usuario);

    if ($linha == 1) {
        $_SESSION['$nome'] = $nome;
        header('Location: sistema.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
?>