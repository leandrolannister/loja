<?php
  $GLOBALS['path'] = '../css/style.css';
  require_once ('../views/header.php');  
  require_once('../infra/connect.php');

  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $query = "INSERT INTO produtos(nome, preco) VALUES('{$nome}', {$preco})"; 
  $success = "<p class='principal alert-success'>Produto: <?='{$nome}';?> add ao preço <?='{$preco}';?></p>";
  $danger = "<p class='principal alert-success'>Produto: <?='{$nome}';?> add ao preço <?='{$preco}';?></p>";
  
  echo mysqli_query($connect(), $query) ? $success : $danger;
  
  mysqli_close($connect());    
  require_once('../views/footer.php');