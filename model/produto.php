<?php 

require_once('../infra/connect.php');


function store($nome, $preco){
    global $connect;

    $query = "INSERT INTO produtos(nome, preco) VALUES('{$nome}', {$preco})"; 
    
    return mysqli_query($connect(), $query);
}