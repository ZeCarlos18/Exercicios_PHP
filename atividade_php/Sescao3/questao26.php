<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 26</h1>
    <h2>Resposta:</h2>
    <?php
        $entrada = [
            1, 2, 6, 9, 0, 45, 3
        ];
        $indice = 0;
        echo "Recebendo as entradas do usuario. Ao digitar 0 o programa encerra";
        do {
            $valor = $entrada[$indice];
            $indice++;
            if ($valor != 0) {
                echo "<br>"."Valor aceitado e sendo adicionado";
        }
        } while ($valor != 0);
        echo "<br>"."Valor 0 foi digitado, encerrando o programa.";

    ?>