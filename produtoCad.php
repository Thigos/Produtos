<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Produtos</title>


    <style>
    table{
        border: #1c1c1c 2px solid !important;
    }
    td, th {
        text-align: center;
    }

    .cont {
        height: 90%;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .insertDiv {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: #1c1c1c 2px solid;
        width: 300px;
        height: 400px;
        border-radius: 33px;
        padding: 20px;
        margin-right: 30px;

    }

    input,
    select {
        margin-bottom: 10px;
        margin-top: 10px;
        border: #1c1c1c 2px solid;
        padding: 10px;
        border-radius: 33px;
        height: 30px;
    }

    select {
        padding: 0px;
    }
    thead{
        background-color: #1c1c1c;
        color: white;
    }
    </style>
</head>

<body>


    <?php
        include("navbar.php");
        require_once("Produto.php");
        require_once("Categoria.php");

        try {
            $produto = new Produto();
            $listaProduto = $produto->listar();
            $categoria = new Categoria();
            $listaCategoria = $categoria->listar();
            
        } catch(Exception $e) {
            // echo '<pre>';
            //     print_r($e);
            // echo '</pre>';
            echo $e->getMessage();
        }
    ?>

    <div class="cont">
        <?php
            if(@$_GET["idProduto"] > 0){
                include("php-models/update-forms.php");
            }else{
                include("php-models/insert-forms.php");
            }
        ?>
        


        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th>Valor</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaProduto as $linha) { ?>
                    <tr>
                        <?php
                            $idProduto =  $linha['idProduto'];
                            $produto = $linha['produto'];
                            $categoria = $linha['categoria'];
                            $valor = $linha['valor'];
                        ?>
                        <td><?php echo $idProduto ?></td>
                        <td><?php echo $produto ?></td>
                        <td><?php echo $categoria ?></td>

                        <td><?php echo $valor ?></td>
                        <td><a href="<?php
                         echo "index.php?idProduto=$idProduto&produto=$produto&categ=$categoria&valor=$valor" 
                        ?>">Editar</a></td>
                        <td><a href="<?php
                            //COM O GET DA PRA APAGAR TODOS OS PRODUTOS!
                            //MUDAR PARA POST
                         echo "produto-excluir.php?idProduto=$idProduto" 
                        ?>">Deletar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div>
        </div>


</body>



</html>