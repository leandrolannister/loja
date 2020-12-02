<?php
  require_once('header.php');
  require_once('connection.php');

  $result = mysqli_query($conexao, "SELECT * FROM produtos");


  while($produto = mysqli_fetch_assoc($result)){
  	echo $produto['nome'] . "<br/>";
  }

require_once('footer.php');  
