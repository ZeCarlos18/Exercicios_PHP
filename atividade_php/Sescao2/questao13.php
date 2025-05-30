<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $nota1 = 5.7;
        $nota2 = 8.6;
        $media = ($nota1 + $nota2)/2;
    ?>
    <h1>Questão 13</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            if($media >= 7){
                echo "Esse aluno foi aprovado";
            }
            elseif($media >5 && $media <= 6.9){
                echo "Esse aluno está de Recuperação";
            }   
            else{
                echo "Esse aluno está reprovado";
            }
        ?>
    </h3>
