<?php

class database extends SQLite3{
    function __construct(){
        $this->open('dadosluz.db');
        
    }
}
$db = new database();

if(!$db){
    die("Não foi possível conectar ao banco de dados");
}

// $drop = "DROP TABLE IF EXISTS produtos";

// $tableUsuarios = "CREATE TABLE IF NOT EXISTS usuarios (
//     id       INTEGER     PRIMARY KEY AUTOINCREMENT,
//     nome     TEXT        NOT NULL,
//     email    TEXT        NOT NULL,
//     senha    TEXT        NOT NULL,
//     ativo    INTEGER     NOT NULL,
//     isAdmin  INTEGER     NOT NULL,
//     [delet] VARCHAR (10) 
// )";

// $tableProdutos = "CREATE TABLE IF NOT EXISTS produtos (
//     id         INTEGER       PRIMARY KEY AUTOINCREMENT,
//     nomeProduto VARCHAR (50) NOT NULL,
//     descricao  VARCHAR (200) NOT NULL,
//     quantidade INTEGER       NOT NULL,
//     preco      DOUBLE        NOT NULL,
//     marca      VARCHAR (50),
//     disponivel INT,
//     [delet]   VARCHAR (10) 
// )";

// if($db->exec($drop)){
//     echo "Tabela tableUsuarios criada com sucesso";
// }
// if($db->exec($tableProdutos)){
//     echo "Tabela tableProdutos criada com sucesso";
// }
