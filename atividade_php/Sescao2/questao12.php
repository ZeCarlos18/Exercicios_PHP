<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $temperatura1 = 15;
        $temperatura2 = -14;
        $temperatura3 = 0;
    ?>
    <h1>Questão 12</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            echo "Temperatura 1:";
            if ($temperatura1 > 0) {
                echo "Positiva.\n";
            }
            elseif ($temperatura1 == 0) {
                echo "Zero.\n";
            }
            else{
                echo "Negativa.\n";
            }
            echo "Temperatura 2:";
            if ($temperatura2 > 0) {
                echo "Positiva.\n";
            }
            elseif ($temperatura2 == 0) {
                echo "Zero.\n";
            }
            else{
                echo "Negativa.\n";
            }
            echo "Temperatura 3:";
            if ($temperatura3 > 0) {
                echo "Positiva.\n";
            }
            elseif ($temperatura3 == 0) {
                echo "Zero.\n";
            }
            else{
                echo "Negativa.\n";
            }
        ?>
    </h3>