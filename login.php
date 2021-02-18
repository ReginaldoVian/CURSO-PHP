<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']){
    $usuarios = [
        [
            "nome" => "Maria",
            "email" => "maria@gmail.com",
            "senha" => "1234567",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@email.com.br",
            "senha" => "7654321",
        ],
        [
            "nome" => "Reginaldo",
            "email" => "reginaldo@hotmail.com",
            "senha" => "1234567",
        ],
    ];

    foreach($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida){
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            header('Location: index.php');
        }
    }

    if(!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuário ou Senha incorretos!'];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,405,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos\css\estilo.css">
    <link rel="stylesheet" href="recursos\css\login.css">
    <title>Curso PHP</title>
</head>
<body class= "login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        Reginaldo Viana DEV @<?= date('Y');?>
    </footer>
</body>
</html>

