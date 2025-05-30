<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $diaDaSemana = 4;
    ?>
    <h1>Questão 14</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            if($diaDaSemana == 1){
                echo "Domingo";
            }
            elseif($diaDaSemana == 2){
                echo "Segunda Feira";
            }
            elseif($diaDaSemana == 3){
                echo "Terça Feira";
            }
            elseif($diaDaSemana == 4){
                echo "Quarta Feira";
            }
            elseif($diaDaSemana == 5){
                echo "Quinta Feira";
            }
            elseif($diaDaSemana == 6){
                echo "Sexta Feira";
            }
            elseif($diaDaSemana == 7){
                echo "Sabado";
            }
        ?>
    </h3>