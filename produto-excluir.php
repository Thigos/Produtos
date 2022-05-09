<?php
    require_once("Produto.php");

    $produto = new Produto();

    $produto->setIdProduto($_GET["idProduto"]);

    $produto->deletar($produto);

    header("location:index.php");
?>