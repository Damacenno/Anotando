<?php
session_start();
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    </head>

    <body>
        <div class="box">
            <div class="container-main">
                <div class="main">
                    <div id="photoname">
                        <label for="file-upload"><img
                                src="assets\img/pictures-pfp/art.png"></label><br><?php echo $_SESSION['usuario']['usuario_nome']; ?>
                    </div>
                    <h5>Meus Dados |</h5>
                    <div id="user-fields">
                        <form action="functions/upimg_function.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome de exibição</label>
                                <input type="text" class="form-control shadow-none"
                                    style="border: none; border-bottom: 1px solid black; border-radius: 0;"
                                    id="exampleFormControlInput1" placeholder="Meu nome">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control shadow-none"
                                    style="border: none; border-bottom: 1px solid black; border-radius: 0;"
                                    id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Senha</label>
                                <input type="password" class="form-control shadow-none"
                                    style="border: none; border-bottom: 1px solid black; border-radius: 0;"
                                    id="exampleFormControlInput1" placeholder="*********">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Gênero</label>
                                <select class="form-control shadow-none" id="exampleFormControlSelect1">
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                    <option>Não Binario</option>
                                    <option>Prefiro não dizer...</option>
                                </select>
                                <input id='file-upload' style="display: none;" type="file" name="arquivo" id="arquivo"
                                    accept="image/jpg, image/png, image/gif, image/jpeg">
                            </div>
                        </form>
                    </div>
                    <button class="btn btn-danger" style=" margin: 1rem 0.5rem; float:right;"
                        onclick='Altera();'>Cancelar</button>
                    <button class="btn btn-success" style=" margin: 1rem 0.5rem; float:right;"
                        onclick='Altera();'>Salvar</button>
                </div>
            </div>
        </div>
        <script src="estudos.js"></script>
    </body>

</html>