<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo ao meu aplicativo web com CI/CD Pipeline!</h1>
    <?php
        // Obtendo a variável de ambiente
        $url = getenv('url');
    ?>
    <!-- Botão redireciona para a URL inserida na variavel de ambiente definida em Library -->
    <form method="get" action="<?php echo $url; ?>">
        <button type="submit">Visite o Site</button>
    </form>
</body>
</html>
