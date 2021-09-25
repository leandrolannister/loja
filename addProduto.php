<?php
  require_once ('header.php');
  $nome = $_GET['nome'];
  $preco = $_GET['preco']; ?>  
<body>
    <div class="container">
       <p class="principal alert-success">Produto<?=$nome;?> add ao preço <?=$preco;?></p>
    </div>   
</body>
<?php require_once('footer.php');?>