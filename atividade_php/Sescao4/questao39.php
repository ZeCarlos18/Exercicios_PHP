<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 39</h1>
    <h2>Resposta:</h2>
    <?php
        include '../Html/helpers.php';
        $terreno = [
            ["comprimento" => 50, "largura" => 150],
            ["comprimento" => 35, "largura" => 170],
            ["comprimento" => 10, "largura" => 70]
        ];
        $areatotal = calcularAreaTerreno($terreno);
        foreach($areatotal as $index => $area) {
            echo "Terreno " . ($index + 1) . ": " . $area . " m²</p>";
        }
    ?>