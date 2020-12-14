<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Acesso</title>
</head>
<body>
    <header>
        <h1>Acesso</h1>
    </header>

    <div class="acesso">
        <div>
            <h2>Cadastro</h2>
                <form action="cadastro.php" method="post">
                    <input type="text" name="nome" placeholder="Digite seu nome" autocomplete="off">
                    <input type="password" name="senha" placeholder="Digite uma senha">
                    <button type="submit"> Cadastrar </button>
                </form>
        </div>    
        <div>
            <h2>Login</h2>
                <?php
                    if (isset($_SESSION['nao_autenticado'])): 
                ?>
                    <script type="text/javascript">
                        alert('Nome e/ou senha incorreto(s)!');
                    </script>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                ?>

                <form action="login.php" method="post">
                    <input type="text" name="nome" placeholder="Digite seu nome" autocomplete="off">
                    <input type="password" name="senha" placeholder="Digite uma senha">
                    <button type="submit"> Entrar </button>
                </form>
        </div>
    </div>
</body>
</html>