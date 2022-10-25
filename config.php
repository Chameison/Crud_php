<?php //configurações iniciais
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'root');
    define('BASE', 'cadastro');

    //chamando as variaveis
    $conn = new MySQLi(HOST,USER,PASS,BASE);
