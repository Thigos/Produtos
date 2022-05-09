<?php

require_once('Conexao.php');

class Categoria{

    private $idCategoria;
    private $categoria;

    public function idCategoria(){
        return $this->idCategoria;
    }

    public function categoria(){
        return $this->categoria;
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * FROM tbcategoria";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }


}

?>