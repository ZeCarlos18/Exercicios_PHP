<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $usuarioAtivo = True;
        $accessoAdministrador = False;
    ?>
    <h1>Questão 20</h1>
    <h2>Resposta:</h2>
    <h3>
        <?php
            if ($usuarioAtivo == True) {
                if ($accessoAdministrador == True) {
                    echo "Acesso Concedido. Seja bem vindo Administrador";
            }else{
                echo "Acesso negado. Usuario não possui permissão de Administrador";
            } 
            }else{
                if($accessoAdministrador){
                    echo "Acesso Negado. Usuario inativo";
                }else{
                    echo "Acesso negado. Usuario inativo e não possui permissão de Administrador";
                }
            }
        ?>
    </h3>
