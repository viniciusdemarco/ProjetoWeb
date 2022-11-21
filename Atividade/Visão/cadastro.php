<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="../CSS/cadastro.css">
    <style>
        
        }
    </style>
</head>
<body>
    <div id="page">
        <div id="head" align="center">
            <h1>Cadastre-se</h1>
        </div>
        <div id="backhead" align="center">
            <a class="buttoms azul" href="../index.php">Página Inicial</a>
            <a class="buttoms azul" href="../Visão/curriculo.php">Curriculum</a>
            <a class="buttoms azul" href="../Visão/post.php">Publicações</a>
            <a class="buttoms azul" href="../Visão/sobre.php">Sobre</a>
            <a class="buttoms azul" href="cadastro.php">Cadastre-se</a>
            <a class="buttoms azul" href="../Visão/login.php">Login</a>
        </div>
        <div class="table" id="table" align="center">
            <form action="../Controle/ClienteControle.php" method="POST">
                <table border="0" cellpadding="2" cellspacing="2">
                    <tr>
                        <td>Nome:</td>
                        <td>
                            <input type="text" name="nome" value="" required placeholder="Nome">
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="email" name="email" value="" required placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td>
                            <input type="password" name="senha" value="" required placeholder="Senha">
                        </td>
                    </tr>
                    <td>
                        <button type="submit">Enviar</button>
                    </td>
                </table>
            </form>
        </div>
    </div>
</body>
</html>