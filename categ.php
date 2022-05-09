<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>


    <?php
        require_once("Categoria.php");
        try {
            $categoria = new Categoria();
            $listaCategoria = $categoria->listar();
            
        } catch(Exception $e) {
            // echo '<pre>';
            //     print_r($e);
            // echo '</pre>';
            echo $e->getMessage();
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaCategoria as $linha) { ?>
                <tr >
                    <td><?php echo $linha['idCategoria'] ?></td>
                    <td><?php echo $linha['categoria'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>