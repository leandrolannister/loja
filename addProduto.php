<?php require_once('header.php'); 
  $nome = $_GET['nome'];
  $preco = $_GET['preco'];

  $conexao = mysqli_connect('127.0.0.1','root','', 'loja');

  $query = "INSERT INTO produtos(nome, preco) values('{$nome}', {$preco})";

  if(mysqli_query($conexao, $query)){ ?>
    <p class="alert alert-success principal">
      Produto <?=$_GET['nome']?>. Preço <?=$_GET['preco']?> add com sucesso!
    </p> 	
  <?php }else{ ?>
    <p class="alert alert-danger principal">
      Produto <?=$_GET['nome']?>. Preço <?=$_GET['preco']?> não foi criado
    </p>
  <?php } 

require_once('footer.php'); ?>