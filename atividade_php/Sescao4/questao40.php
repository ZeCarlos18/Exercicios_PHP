<?php
include_once '../Html/helpers.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mensagem'])) {
    $mensagemRegistrada = registrarEvento($_POST['mensagem']);
} else {
    $mensagemRegistrada = registrarEvento("Sistema de log iniciado");
}
$historicoEventos = [];
if (file_exists('eventos.log')) {
    $conteudoLog = file_get_contents('eventos.log');
    $linhas = array_reverse(explode(PHP_EOL, trim($conteudoLog)));
    foreach ($linhas as $linha) {
        if (!empty($linha)) {
            $historicoEventos[] = $linha;
        }
    }
}
?>
<h1>Questão 40</h1>
<h2>Resposta:</h2>

<form method="POST">
    <label>Nova mensagem:</label><br>
    <textarea name="mensagem" rows="3" required></textarea><br>
    <button type="submit">Registrar</button>
</form>

<h3>Histórico de Eventos:</h3>
<pre>
<?php
foreach ($historicoEventos as $evento) {
    echo htmlspecialchars($evento) . "\n";
}
?>
</pre>
<p>Último evento: <?php echo htmlspecialchars($mensagemRegistrada); ?></p>