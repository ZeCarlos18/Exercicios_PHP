<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $corEscolhida = "Verde";
    ?>
    <h1>Questão 18</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            if($corEscolhida == "Vermelho" || $corEscolhida == "Verde" || $corEscolhida == "Azul"){
                echo "A cor foi escolhida com Sucesso";
            }
            else{
                echo "Essa cor não está nos nossos padrões, sugerimos usar uma cor padrão";
            }
        ?>
    </h3>
