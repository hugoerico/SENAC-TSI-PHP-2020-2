<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="lista_contato.php">listar</a>

    <a href="apaga_contato.php">apagar</a>

    cadastre seu contato
    <br>
    <form action="grava_contato.php" method="post">

        nome:<input type="text" name="nome" id="nome"><br>
        whatsapp: <input type="text" name="whats" id="whats"><br>
        <button type="submit">gravar</button>
    </form>
</body>
</html>