<?php 
/*Conexão com o banco de dados*/

class MySql{
    function conectar(){
        $dbname = "mysql:host=localhost;dbname=projeto_02;charset=utf8";
        $user = "root";
        $password = "";
    
        try{
            $pdo = new PDO($dbname, $user, $password);
            return $pdo;
        }catch(PDOException $ex){
            echo 'Erro ao conectar: '.$ex->getMessage();
        }
    }    
}

?>