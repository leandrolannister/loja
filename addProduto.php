<?php 
  require_once('header.php');
  require_once('connection.php'); 

  function insert($conexao, $nome, $preco){
   $query = "INSERT INTO produtos(nome, preco) values('{$nome}', {$preco})";

   return mysqli_query($conexao, $query);
  } 
 

  if(insert($conexao, $_GET['nome'], $_GET['preco'])) { ?>
    <p class="text-success principal">
      Produto <?=$_GET['nome']?>. Preço <?=$_GET['preco']?> add com sucesso!
    </p> 	
  <?php } else{
     $msg = mysqli_error($conexao) ?>
    <p class="text-danger principal"><?=$msg?></p>
  <?php } 

require_once('footer.php'); ?>