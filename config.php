<?php
if (!defined('HOST')) {
    define('HOST', 'localhost');
}

if (!defined('USER')) {
    define('USER', 'root');
}

if (!defined('PASS')) {
    define('PASS', '');
}

if (!defined('BASE')) {
    define('BASE', 'clinica');
}

$conn = new mysqli(HOST, USER, PASS, BASE);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>