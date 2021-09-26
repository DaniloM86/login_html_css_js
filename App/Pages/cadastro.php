
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <title>tela de login</title>
</head>
<body>
    <div class="container">
        <div class="div-form">
            <h3>Cadastro</h3>
            <form name="formulario" action="" method="POST">
                <input type="text" name="nome" id="nome" placeholder="nome">
                <input type="email" name="email" id="email" placeholder="email">
                <button type="submit" name="btn-Cad" onclick =" return validaForm()">
                   cadastrar
                </button>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript" src="../../Public/js/arquivo.js"></script>
</html>