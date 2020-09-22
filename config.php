<?php 

    if(Painel::logado() == false){
        include('index.php');
    }else{
        echo 'Não é possivel logar';
    }

?>