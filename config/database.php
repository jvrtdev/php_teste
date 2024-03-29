<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//informacoes de conexao
$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];


try{
    //criacao de conexao
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $user, $password);

    //configuracao para exibir erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexao com MySQL realizada com sucesso!";
}
catch(PDOException $e){
    //se ocorrer erro de conexao exibe a mensagem de erro
    echo "Erro na conexao com o MySQL: " . $e->getMessage();
}



?>