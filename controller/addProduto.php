<?php
  $GLOBALS['path'] = '../css/style.css';
  require_once ('../views/header.php');  
  require_once('../infra/connect.php');
  require_once('../model/produto.php');

  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  
  $success = "<p class='principal text-success'>Produto: <?='{$nome}';?> add ao preço <?='{$preco}';?></p>";
  $danger = "<p class='principal  text-success'>Produto: <?='{$nome}';?> add ao preço <?='{$preco}';?></p>";
  
  echo store($nome, $preco) ? $success : $danger;
  
  mysqli_close($connect());    
  require_once('../views/footer.php');