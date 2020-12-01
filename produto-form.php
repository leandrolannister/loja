<?php require_once('header.php'); ?>
 
	  <form action="addProduto.php">
	    <table class="table">
	      <tr>
	        <td>Nome</td>
	        <td><input type="text" class="form-control" name="nome" /></td>
	      </tr>

	      <tr>
	        <td>Preço</td>
	        <td><input type="number" class="form-control" name="preco" /></td>
	      </tr>

	      <tr>
	        <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
	      </tr>
	   </table>
	 </form>

<?php require_once('footer.php'); ?>