<!DOCTYPE html>
<html lang="pt-BR">
    <h1>Questão 28</H1>
    <h2>Resposta:</h2>
    <?php
    $totalDiaria = 0;
    function gerarNumerosAleatorios() {
        $numeros = array();   
        for ($i = 0; $i < 100; $i++) {
            $numero = rand(50, 5000);
            $numeros[] = $numero;
    }    
        return $numeros;
}
    $ListaDeNumeros = gerarNumerosAleatorios();
    for ($i = 0; $i < 100; $i++) {
        $totalDiaria = $ListaDeNumeros[$i] + $totalDiaria;
    }
    echo "A soma de todas as diarias deu: R$$totalDiaria";
    ?>