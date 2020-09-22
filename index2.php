<?php

    require 'class/Painel.php';

    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Página de logado!</title>
</head>
<body>
    
    <div class="box-content">

        <h3>Login foi efetuado com sucesso</h3>
        <div class="loggout">
            <a href="?loggout">Sair</a>
        </div>

    </div>

</body>
</html>