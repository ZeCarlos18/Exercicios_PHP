<?php
function exibirAlerta($mensagem = null) {
    $mensagemPadrao = "Atenção: Esta é uma mensagem de alerta padrão do sistema!";
    $mensagemExibida = $mensagem ?? $mensagemPadrao;
    
    echo '<div style="padding: 15px; margin: 10px 0; border: 1px solid #f5c6cb;';
    echo 'background-color: #f8d7da; color: #721c24; border-radius: 4px;">';
    echo htmlspecialchars($mensagemExibida);
    echo '</div>';
}
?>