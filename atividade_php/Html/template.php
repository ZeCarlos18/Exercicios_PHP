<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?> - Meu Site</title>
    <link rel="stylesheet" href="../Css/style4.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Meu Site</h1>
        <nav>
            <a>Home</a>
            <a>Sobre</a>
            <a>Categoria</a>
            <a>Contato</a>
        </nav>
    </header>

    <main class="conteudo-principal">
        <?php echo $conteudo; ?>
    </main>

    <footer class="rodape">
        <p>&copy; <?php echo date('Y'); ?> Meu Site. Todos os direitos reservados.</p>
    </footer>
</body>
</html>