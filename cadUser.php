<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Usuario</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style>
            .div-main{
                width: 100%;
                position: absolute;
                top: 80px;
                padding: 20px;
            }

            .card {
                min-height: 250px !important;
                margin: 0 auto;
                float: none;
                margin-bottom: 20px;
            }

            input {
                border: none;
                border-bottom: 1.2px solid #00000038;
                margin-top: 10px;
            }
            .row{
                justify-content: center;
            }
        </style>

    </head>
    <body>
        <!--Include/require-->
        <?php 
            include_once("navbar.php");
            include_once("Cards.php");
            require_once("Usuario.php");

        ?>
      
        <div class="div-main">
            <div class="row">
                <div class='col-md col-xl-3'>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar usuário</h5>
                            <form method="post" action="cadastrar-usuario.php">
                                <input type="text" maxlength="100" placeholder="Nome" name="nomeUser" required>
                                <input type="text" placeholder="Login" name="loginUser" required>
                                <input type="password" placeholder="Senha" name="senhaUser" required>
                                <input type="password" placeholder="Confirmar Senha" name="">
                                <button class="bt-cadastrar" type="submit">Cadastrar</button>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <?php
                    /*try {
                        $usuario = new Usuario();
                        $listUsers = $usuario->listar();
                        $cards = new Cards();
                        
                    } catch(Exception $e) {
                        echo $e->getMessage();
                    }


                    foreach ($listUsers as $linha){
                        $cards->createInputCard($linha['idUser'], 
                        $linha['nome'],
                        $linha['login'],
                        $linha['senha'], 
                        "Usuário: ", "atualizar-usuario.php");

                    }
*/
                    
                ?>
            </div>
        </div>
        

    </body>
</html>