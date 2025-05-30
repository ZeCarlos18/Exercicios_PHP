<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 34</h1>
    <h2>Resposta:</h2>
    <?php
        include_once '../Html/helpers.php';
        $notas = [
            8, 7, 9, 10, 7, 5
        ];
        calculoNotas($notas);
        $media = calculoNotas($notas);
        echo "A media desse aluno é: ".number_format($media, 2);
    ?>
</html>