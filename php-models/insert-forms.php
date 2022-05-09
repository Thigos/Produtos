<form method="POST" action="produto-inserir.php">
    <div class="insertDiv">

        <h3>Inserir Produto</h3>
        <input type="text" required placeholder="Nome Produto" name="produto">
        <select name="idCateg" required="required">
            <option value="" disabled selected>Selecione</option>
            <?php foreach ($listaCategoria as $linha) { ?>

            <option value="<?php echo $linha['idCategoria'] ?>"><?php echo $linha['categoria'] ?></option>
            <?php } ?>

        </select>

        <input required type="text" placeholder="Valor" name="valor">
        <button>
            <p>Enviar</p>
            <div class="div-bt"></div>
        </button>


    </div>
</form>