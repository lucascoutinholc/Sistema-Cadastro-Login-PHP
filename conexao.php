<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "1234";
    $nomebanco = "banco";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $nomebanco);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  
?>