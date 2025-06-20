<?php $Titulo = "Pagina Principal";?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <link rel="stylesheet">
    <style>
        body {
            background: #111;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container-index {
            background: #333;
            color: #fff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 0 20px #0008;
            min-width: 320px;
            max-width: 90vw;
        }
        h1 {
            text-align: center;
            margin-bottom: 24px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 12px 0;
        }
        a {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }
        a:hover {
            color: #fff;
            text-decoration: underline;
        }
        </style>
</head>
<body>
    <div class="container-index">
        <h1>Página Principal</h1>
        <ul>
            <li><a href="Sescao1/index.php">Sesção 1 - Variaveis e Tipos de Dados</a></li>
            <li><a href="Sescao2/index.php">Sesção 2 - Estruturas Condicionais</a></li>
            <li><a href="Sescao3/index.php">Sesção 3 - Estruturas de Repetição</a></li>
            <li><a href="Sescao4/index.php">Sesção 4 - Funções e princípio DRY</a></li>
            <li><a href="Sescao5/index.php">Sesção 5 - HTML + PHP, Funções Nativas</a></li>
        </ul>
    </div>
</body>
</html>