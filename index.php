<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    

    <title>Dashboard</title>


    <style>
    table{
        border: #1c1c1c 2px solid !important;
    }
    td, th {
        text-align: center;
    }

    .cont {
        margin-top:10px;
        margin-left: 20%;
        margin-right: 20%;
        
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

        $arrayCategorias = array();

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

    <div style="display:flex;">
        <div id="curve_chart" style="width: 50%; height: 500px"></div>
        <div id="piechart" style="width: 50%; height: 500px;"></div>
    </div>


    <div class="cont">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaProduto as $linha) { ?>
                <tr>
                    <?php
                        $idProduto =  $linha['idProduto'];
                        $produto = $linha['produto'];
                        $categoria = $linha['categoria'];
                        array_push($arrayCategorias, $categoria);
                        $valor = $linha['valor'];
                    ?>
                    <td><?php echo $idProduto ?></td>
                    <td><?php echo $produto ?></td>
                    <td><?php echo $categoria ?></td>

                    <td><?php echo $valor ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>


</body>

<?php
    //Scripts dos gráficos
    include_once("chartScripts/lineScript.php");
    include_once("chartScripts/pieScript.php");
?>

</html>