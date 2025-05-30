<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $idadeAluno1 = 17;
        $idadeAluno2 = 18;
    ?>
    <h1>Questao 11</h1>
    <h2>Resposta:</h2>
    <h3><?php 
        echo "Aluno 1:\n";
        if($idadeAluno1 >=18){
            echo "Acesso garantido.";
        }
        else{
            echo "Acesso Negado.\n";
        }
        echo "Aluno 2:\n";
        if($idadeAluno2 >= 18){
            echo "Acesso garantido.";
        }
        else{
            echo "Acesso negado.";
        }
         ?></h3>
