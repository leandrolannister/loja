<?php 
   $GLOBALS['path'] = '../css/style.css';
   require_once('header.php'); 
?>

<div class="principal">
    <h1>Produto Form</h1>
    <form action="../controller/addProduto.php" method="POST">
        <div class="frm_nome">
            <label for="nome">Nome</label>
            <input type="text" name="nome" /> <br />
        </div>

        <label for="nome">Preço</label>
        <input type="text" name="preco" />

        <button type="submit">Salvar</button>
    </form>
</div>

<?php require_once('footer.php'); ?>