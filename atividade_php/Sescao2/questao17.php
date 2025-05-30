<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $temeperaturaAtual = 17.8;
    ?>
    <h1>Questão 17</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            if($temeperaturaAtual < 0){
                echo "Alerta de Gelo!";
            }
            elseif($temeperaturaAtual > 0 && $temeperaturaAtual < 15){
                echo "Clima Ameno";
            }
            elseif($temeperaturaAtual > 15 && $temeperaturaAtual < 25){
                echo "Clima Agradavel";
            }
            elseif($temeperaturaAtual > 25){
                echo "Atenção: Calor Extremo!";
            }
        ?>
    </h3>