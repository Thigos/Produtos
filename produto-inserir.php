<?php
    require_once("Produto.php");
    
    $produto = new Produto();

    $produto->setProduto($_POST["produto"]);
    $produto->setValor($_POST["valor"]);
    $produto->setIdCategoria($_POST["idCateg"]);
    
    $produto->cadastrar($produto);

    header("location:index.php");
    
?>