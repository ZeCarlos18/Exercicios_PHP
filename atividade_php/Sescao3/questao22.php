<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 22</h1>
    <h2>Resposta:</h2>
    <?php
        $ListaDeNumeros = [
            2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20
        ];
        echo "Todos os numeros pares de 2 a 20 são:\n";
        for ($i = 0; $i <= 18; $i++) {
            if ($ListaDeNumeros[$i]%2 == 0){
                echo "<br>"."$ListaDeNumeros[$i]";
            }
        }
    ?>
