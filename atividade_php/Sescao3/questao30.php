<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta chasrset='UTF-8'>
        <meta name='viewport' content='width = device - width, inicial-scale=1,0'>  
        <link rel='stylesheet' href = 'style.css'>        
    </head>
    <header>
        <div class="cabeca">
            <h1>Tabuada do 1 ao 5</h1>
        </div>
    </header>
    <body>
        <div class="tabuada">
        <?php
            for ($i = 0; $i <= 5; $i++) {
                echo " $i * 5 = ".($i*5)."<br>";
            }
        ?>
        </div>
    </body>