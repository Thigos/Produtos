<?php

require_once('Conexao.php');

class Produto{

    private $idProduto;
    private $produto;
    private $idCategoria;
    private $valor;

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }
    public function setProduto($produto){
        $this->produto = $produto;
    }
    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idProduto, produto, valor, categoria FROM tbproduto
                            INNER JOIN tbcategoria
                                on tbproduto.idCategoria = tbcategoria.idcategoria";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function cadastrar($produto){
        //prepare statement
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbProduto(produto, valor, idCategoria)
                                VALUES(?,?,?)");
        $stmt->bindValue(1, $produto->getProduto());
        $stmt->bindValue(2, $produto->getValor());
        $stmt->bindValue(3, $produto->getIdCategoria());
        $stmt->execute();
    }

    public function deletar($produto){
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbProduto
                                WHERE idProduto = ?");

        $stmt->bindValue(1, $produto->getIdProduto());
        $stmt->execute();
    }

    public function atualizar($produto){
        $con = Conexao::conectar();
        $stmt = $con->prepare("UPDATE tbProduto
                                SET produto = ?, 
                                    valor = ?, 
                                    idCategoria = ?
                                WHERE idProduto = ?");

        $stmt->bindValue(1, $produto->getProduto());
        $stmt->bindValue(2, $produto->getValor());
        $stmt->bindValue(3, $produto->getIdCategoria());
        $stmt->bindValue(4, $produto->getIdProduto());
        $stmt->execute();

    }


}

?>