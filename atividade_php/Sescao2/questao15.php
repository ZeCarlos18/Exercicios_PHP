<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $cafeteria = [
            "Café",
            "Suco",
            "Chá"
        ];
        $escolha = "Café";
    ?>
    <h1>Questão 15</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            if($escolha == $cafeteria[0]){
                echo "Você escolheu $cafeteria[0]";
            }
            elseif($escolha == $cafeteria[1]){
                echo "Você escolheu $cafeteria[1]";
            }
            elseif($escolha == $cafeteria[2]){
                echo "Você escolheu $cafeteria[2]";
            }
            else{
                echo "Bebida não Disponivel";
            }
        ?>
    </h3>