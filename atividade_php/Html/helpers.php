<?php
function boasVindas(){
    echo "Seja bem Vindo ao nosso Site.";
}
function calculoEstoqueMercadoria($est){
            $valorTotal = array();
                foreach ($est as $et){
                    $valorTotal []= $et['quantidade'] * $et['preço'];
            }
            return $valorTotal;
        }

function calculoNotas($nt){
    $totalNotas = 0;
        for ($i = 0; $i < 6; $i++){
            $totalNotas += $nt[$i];
} 
    return $totalNotas/6;
}
function parOuimpar($numero){
    if (!is_numeric($numero)){
        return "Não é um numero";
}
    $numero = (int) $numero;
    if ($numero %2== 0){
        return "Esse numero é Par";
}
    else{
        return "Esse numero é Impar";
}
}

function maiorIdade($idade) {
    if (!is_numeric($idade)){
        return "Não é uma Idade.";
    }
    $idade = (int)$idade;
    if ($idade >= 18) {
        return "Essa pessoa é maior de Idade.";
}
    else{
        return "Essa pessoa é menor de Idade.";
}
}

function saudacao($nome){
    if (!is_string($nome)){
        return "Não é um nome.";
}
    $nome = (string)$nome;
    return "Seja bem vindo ".$nome;
}

function ajustarSalario($salario){
    if(!is_numeric($salario)){
        return "Não é um salario.";
}
    $valor_formatado = number_format((float)$salario, 2, ",",".");
    return $valor_formatado;
}

function calcularAreaTerreno(array $area): array{
    $areatotal = [];
    foreach($area as $ar){
        if (!is_numeric($ar['comprimento']) || !is_numeric($ar['largura'])){
        throw new InvalidArgumentException('Não é possivel realizar nenhum calculo com esses numeros');
    }                    
    $areatotal[] = $ar['comprimento'] * $ar['largura'];
}
    return $areatotal;            
}

function registrarEvento($mensagem) {
    $timestamp = date('Y-m-d H:i:s');
    return "[$timestamp] $mensagem";
}
