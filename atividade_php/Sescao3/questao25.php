<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 25</h1>
    <h2>Resposta:</h2>
    <?php
        $alunos = [
            ["nome" => "Pedro", "matricula" => 1, "nota" => 8],
            ["nome" => "Henrique", "matricula" => 2, "nota" => 4],
            ["nome" => "Eduarda", "matricula" => 3, "nota" => 9],
            ["nome" => "João", "matricula" => 4, "nota" => 10],
            ["nome" => "Maria", "matricula" => 5, "nota" => 2],
            ["nome" => "Jose", "matricula" => 6, "nota" => 7],
            ["nome" => "Mateus", "matricula" => 7, "nota" => 7],
            ["nome" => "Kaiki", "matricula" => 8, "nota" => 5],
            ["nome" => "Lucas", "matricula" => 9, "nota" => 4],
            ["nome" => "Thiago", "matricula" => 10, "nota" => 10]
        ];
        foreach ($alunos as $alunos => $aluno) {
            echo "<br>"."Nome: ".$aluno['nome']."<br>"."Matricula: ".$aluno['matricula']."<br>"."\nNota: ".$aluno['nota'];
        }
    ?>