<?php require_once('header.php'); ?>

<div class="container">
  <div class="principal">
    <form action="addProduto.php">
      <label for="nome">Nome</label>
      <input type="text" name="nome">

      <label for="preco">Preço</label>
      <input type="number" name="preco">

      <input type="submit" name="cadastrara">
    </form>
  </div>
</div>

<?php require_once('footer.php'); ?>