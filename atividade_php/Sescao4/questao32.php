<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel='stylesheet' href = '../Css/style2.css'>             
</head>
<h1>Questão 32</h1>
<h2>Resposta:</h2>
<div class="calculator">
  <div class="calculator__output">
    <?php
        function calculadora(){
            return 5 + 4;
        }
        echo "5 + 4 = " .calculadora();
    ?>
  </div>
  <div class="calculator__keys">
    <button class="calculator__key calculator__key--operator">+</button>
    <button class="calculator__key calculator__key--operator">-</button>
    <button class="calculator__key calculator__key--operator">&times;</button>
    <button class="calculator__key calculator__key--operator">÷</button>
    <button class="calculator__key">7</button>
    <button class="calculator__key">8</button>
    <button class="calculator__key">9</button>
    <button class="calculator__key">4</button>
    <button class="calculator__key">5</button>
    <button class="calculator__key">6</button>
    <button class="calculator__key">1</button>
    <button class="calculator__key">2</button>
    <button class="calculator__key">3</button>
    <button class="calculator__key">0</button>
    <button class="calculator__key">.</button>
    <button class="calculator__key">AC</button>
    <button class="calculator__key calculator__key--enter">=</button>
  </div>
</div>