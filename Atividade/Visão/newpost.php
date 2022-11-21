<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Publicação</title>
    <link rel="stylesheet" type="text/css" href="../CSS/newpost.css">
    <style>
    </style>
</head>
<body>
<form id="Formulario" action="../Controle/PostagemControle.php" method="post">
    <div id="page">
        <div id="head" align="center">
            <h1>Adicione sua nova publicação</h1>
        </div>
        <div id="backhead" align="center">
            <a class="buttoms azul" href="../index.php">Página Inicial</a>
            <a class="buttoms azul" href="curriculo.php">Curriculum</a>
            <a class="buttoms azul" href="post.php">Publicações</a>
            <a class="buttoms azul" href="sobre.php">Sobre</a>
            <a class="buttoms azul" href="cadastro.php">Cadastre-se</a>
            <a class="buttoms azul" href="login.php">Login</a>
        </div>
        <div id="post">
            <div id="newpost">
                <div class="titulo">
                    <h2>Título</h2>
                    <textarea type="text" id="titulo" name="titulo" rows="1" cols="80" required autofocus/></textarea>
                </div>
                <div class="conteudo">
                    <h2>Conteúdo</h2>
                    <textarea type="textarea" id="conteudo" name="conteudo" rows="10" cols="80" required/></textarea>
                </div>
                <div>
                    <h2>Data da Publicação</h2>
                    <input type="date" name="data da publicacao" required>
                </div>
                <div id="botao_publicar">

                        <button type="submit" class="publicar cinza">
                            <h4 align="center" class="textAdd">Publicar</h4>
                        </button>

                </div>
            </div>
            <div id="anuncio">

            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    var form = document.getElementById("Formulario");

    form.onsubmit = function (e) {
        e.preventDefault();

        var data = {};
        for (var i = 0, ii = form.length; i < ii; ++i) {
            var input = form[i];
            if (input.name) {
                data[input.name] = input.value;
            }
        }

        var xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action, true);

        xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
        xhr.send(JSON.stringify(data));

        xhr.onloadend = function () {
            var obj = JSON.parse(xhr.response);
            document.getElementById("retorno").innerHTML = obj.RETORNO;

        };
    };
</script>

</body>
</html>