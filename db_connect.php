<?php
//Conexão com banco de dados
try {

    $con = new PDO('mysql: host=localhost:3000; dbname=adrb', 'root', 'password');

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    echo 'Falha na conexão: '.$e->getMessage();

}
