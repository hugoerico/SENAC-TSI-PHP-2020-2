<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="lista_contato.php">listar</a>
    <a href='lista_contato.php'>Editar</a>
    <a href="apaga_contato.php">apagar</a>

    edite seu contato
    <br>
    <?php
    if (isset($msg)) echo $msg;
    ?>
    <form method="post" action="edita_contato.php">
        Nome: <input type="text" name="nm" value="<?php echo $contato['nome'] ?>">
        Whatsapp: <input type="text" name="whats" value="<?php echo $contato['whatsapp'] ?>">
        <input type="hidden" name="id" value="<?php echo $contato['id'] ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>