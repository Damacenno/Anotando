<?php
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="box">
            <div class="container-main">
                <div class="main">
                    <div class="row pt-5 d-flex justify-content-around" style="height: 90%;">
                        <a href="calendario.php" class="box-option">
                            <div class="text-center p-3 d-flex box-option-content">

                                <div class="img_box_option"><img src="assets/img/icons/calendario_escuro.png" alt="">
                                </div>
                                Calendario

                            </div>
                        </a>
                        <div class=" box-option text-center p-3 d-flex ">
                            <div class="img_box_option"><img src="assets/img/icons/gastos.png" alt=""></div>
                            Financias
                        </div>

                        <div class="box-option text-center p-3 d-flex ">
                            <div class="img_box_option"><img src="assets/img/icons/estoque (1).png" alt=""></div>
                            Estoque
                        </div>


                        <div class="box-option text-center p-3 d-flex ">
                            <div class="img_box_option"><img src="assets/img/icons/funcionarios (1).png" alt=""></div>
                            Funcionarios
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Adicione as referências aos scripts do Bootstrap -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
            </div>
    </body>

</html>