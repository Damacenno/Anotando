<?php
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
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="box">
            <div class="container-main">
                <div class="nav-main">
                    <div area="calendario" class="nav-main-option main-selected">Calendario</div>
                    <div area="visao_detalhada" class="nav-main-option">Visao detalhada</div>
                    <div area="inserir" class="nav-main-option">inserir</div>
                </div>
                <div class="main">
                    <div>
                        <div class="calendario" id="calendario">
                            <div class="console-log">
                                <div class="log-content">
                                    <div class="--noshadow" id="demoEvoCalendar"></div>
                                </div>
                            </div>
                            <div class="action-buttons">
                                <button class="btn-action" id="addBtn">ADD EVENT</button>
                                <button class="btn-action" id="removeBtn" disabled>REMOVE EVENT</button>
                            </div>
                        </div>
                        <div class="visao_detalhada" id="visao_detalhada">

                            <div class="container_campo_pesquisa">
                                <form action="filtro">
                                    <input type="text" class="campo_pesquisa" id="txtBusca" placeholder="Buscar..." />
                                    <input type="submit" value="" class="btn_pesquisa">
                                </form>
                            </div>
                            <div class="content_visao_detalhada">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/estudos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="./evo-calendar/js/evo-calendar.min.js"></script>
        <script src="./demo/demo.js"></script>
    </body>

</html>