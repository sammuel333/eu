<?php
    $hostname = "localhost";
    $username = "root";
    $passoword = "";
    $databese = "desenvolvemento";
    //habilita ps relatorios de erro da classe mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try{
        $conn = new mysqli($hostname, $username, $passoword, $databese);
        //define o charset para UTF-8
        $conn -> set_charset("utf8mb4");
        echo "conectado ao BD!";
    } catch (mysqli_sql_exception $e) {
        error_log("erro ba conexão com o BD:".$e->getmessage());
        //mensagem genérica para usuario
        die("Ocorreu um erro interno no servidor do BD.");
    }
?>