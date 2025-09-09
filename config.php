<?php
//Configuração do banco
$dataBase['server'] = 'localhost';
$dataBase['user'] = 'root';
$dataBase['password'] = '';
$dataBase['database'] = 'banco';

//mysql_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Desativa os relatórios de erros
try {
    $mysqli = new mysqli($dataBase['server'], $dataBase['user'], $dataBase['password'], $dataBase['database']);
    $mysqli -> set_charset("utf8mb4");
} catch (Exception $e){
    error_log($e->getMessage());
    exit('Algo de errado não está certo!'); // Preferivel nn ter uma mensagem de aviso em uma aplicação real
}
?>