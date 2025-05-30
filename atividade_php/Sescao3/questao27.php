<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 27</h1>
    <h2>Resposta:</h2>
    <?php
        $participantes = [
            ["nome" => "Lucas"],
            ["nome" => "Marcos",],
            ["nome" => "Henrique"],
            ["nome" => "Nicolas"]
        ];
        $indice = 1;
        foreach ($participantes as $participantes => $participante){
            echo "<br>"."O $indice* participante da festa é: ".$participante['nome'];
            $indice ++;
        }
    
    ?>