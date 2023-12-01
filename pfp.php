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
        <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.min.css">
        <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.orange-coral.min.css">
        <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.midnight-blue.min.css">
        <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.royal-navy.min.css">

        <link rel="stylesheet" type="text/css" href="./demo/demo.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">

    </head>

    <body>
        <div class="box">
            <div class="container-main">
                <div class="main">
                    <div id="photoname">
                        <img src="assets\img/pictures-pfp/"><br><?php echo $_SESSION['usuario']['usuario_nome'];?>
                    </div>
                    <div id="user-fields">
                        <h5>Informações</h5>
                        <form>
                            <input type="text" placeholder="<?php echo $_SESSION['usuario']['usuario_nome'];?>">
                            <input type="text" placeholder="<?php echo $_SESSION['usuario']['usuario_email'];?>">
                            <input type="password" placeholder="*****">
                            <label for='file-upload' class='uploadpic'>Escolher Foto: <span id='file-selected'></span></label>
                            <input id='file-upload' style="display: none;" type="file" name="arquivo" id="arquivo" accept="image/jpg, image/png, image/gif, image/jpeg">
                        </form>
                        <button style=" margin: 1rem 0.5rem;" onclick='Altera();'>Atualizar perfil</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="estudos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="./evo-calendar/js/evo-calendar.min.js"></script>
        <script src="./demo/demo.js"></script>
    </body>

</html>