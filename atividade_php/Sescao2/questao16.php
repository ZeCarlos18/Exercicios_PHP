<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $estadoCivil = "D";
    ?>
    <h1>Questão 16</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            if($estadoCivil == "C"){
                echo "Casado(a)";
            }
            elseif($estadoCivil == "S"){
                echo "Solteiro(a)";
            }
            elseif($estadoCivil == "D"){
                echo "Divorciado(a)";
            }
            else{
                echo "Outro";
            }
        ?>
    </h3>