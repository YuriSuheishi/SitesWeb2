<?php

if($_GET){
    // isset() - função interna que verifica se a variável existe
    // empty() - função interna que verifica/checa se o valor é nulo
    if(isset($_GET['nome']) && !empty($_GET['nome'])){
        $nome = $_GET['nome'];
        echo 'Nome da pessoa é ' . $nome;
    }
    else{
        echo 'Nome não informado!';
    }
}

?>