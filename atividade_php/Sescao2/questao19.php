<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $cargo = "gerente"
    ?>
    <h1>Questão 19</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            switch ($cargo) {
                case "desenvolvedor":
                    $salario = 3.560;
                    echo "Salario do Desenvolvedor: ". number_format($salario,3);
            }
            switch ($cargo) {
                case "gerente":
                    $salario = 5.260;
                    echo "Salario do Gerente R$: ".number_format($salario,3);
            }
            switch ($cargo) {
                case "designer":
                    $salario = 2.130;
                    echo "Salario do Designer: ".number_format($salario,3);
            }
        ?>
    </h3>
