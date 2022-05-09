<?php
    require_once("Produto.php");
    
    $produto = new Produto();

    $produto->setIdProduto($_POST["idProduto"]);
    $produto->setProduto($_POST["produto"]);
    $produto->setValor($_POST["valor"]);
    $produto->setIdCategoria($_POST["idCateg"]);
    
    $produto->atualizar($produto);

    header("location:index.php");
    
?>