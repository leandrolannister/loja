<?php require_once('header.php'); ?>

<body>
    <div class="container">
        <div class="principal">
            <h1>Produto Form</h1>
            <form action="addProduto.php">
                <div class="frm_nome">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" /> <br />
                </div>

                <label for="nome">Preço</label>
                <input type="text" name="preco" />

                <button type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>

<?php require_once('footer.php'); ?>