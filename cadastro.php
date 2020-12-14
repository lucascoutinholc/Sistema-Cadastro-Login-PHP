<?php
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    //echo "Nome: $nome";
    //echo "Senha: $senha";

    $result_usuario = "INSERT INTO usuario(nome, senha) 
    VALUES ('$nome','$senha')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/sistema-login-php/'>
            <script type='text/javascript'>
                alert('O usuario foi cadastrado!');
            </script>
        ";    
    }else{
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/sistema-login-php/'>
            <script type='text/javascript'>
                alert('O usuario não foi cadastrado!');
            </script>
        ";    
    }
?>