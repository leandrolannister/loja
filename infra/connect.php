<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dataBase = 'loja';

$connect = function() use($host, $user, $password, $dataBase){
   return mysqli_connect($host, $user, $password, $dataBase);
};