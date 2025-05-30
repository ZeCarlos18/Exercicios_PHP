<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 24</h1>
    <h2>Resposta:</h2>
    <?php
        for ($i = 0; $i <= 50; $i++) {
            echo "<br>"."Processando o item $i de 100";
        }
        echo "<br>"."O processo foi encerrado no item 50 para não causar sobrecarga";
    ?>