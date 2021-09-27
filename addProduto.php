<?php
  require_once ('header.php');
  
  $nome = $_GET['nome'];
  $preco = $_GET['preco'];
  $conexao = mysqli_connect('localhost', 'root', '', 'loja');
  $query = "INSERT INTO produtos(nome, preco) VALUES('{$nome}', {$preco})"; ?>
  
  <?php if(mysqli_query($conexao, $query)): ?>
    <p class="principal alert-success">Produto: <?=$nome;?> add ao preço <?=$preco;?></p>    
  <?php else: ?>
    <p class="principal alert-danger">Produto não foi add </p>
  <?php endif; ?>   
  
  <?php 
     mysqli_close($conexao);    
    require_once('footer.php');
  ?>