<form method="POST" action="produto-update.php">
    <div class="insertDiv">

        <h3>Atualizar Produto</h3>
        <input type="text" required value="<?php echo @$_GET["produto"] ?>" placeholder="Nome Produto" name="produto">
        <input hidden name="idProduto" value="<?php echo @$_GET["idProduto"] ?>">
        <select name="idCateg" required="required">
            <option value="" disabled>Selecione</option>
            <?php foreach ($listaCategoria as $linha) { ?>

            <option value="<?php echo $linha['idCategoria'] ?>" 
                <?php if($linha['categoria'] == @$_GET["categ"]){
                    echo "selected";
                } ?>>
                 <?php echo $linha['categoria'] ?>
            </option>

            <?php } ?>

        </select>

        <input required type="text" value="<?php echo @$_GET["valor"] ?>" placeholder="Valor" name="valor">
        <button>
            <p>Atualizar</p>
            <div class="div-bt"></div>
        </button>


    </div>
</form>