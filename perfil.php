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
                    <label for="file-upload"><img src="assets\img/pictures-pfp/art.png"></label><br><?php echo $_SESSION['usuario']['usuario_nome']; ?>
                </div>
                <h5>Meus Dados |</h5>
                <div id="user-fields">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome de exibição</label>
                            <input name="nome" value="<?php echo $_SESSION['usuario']['usuario_nome']; ?>" type="text" class="form-control shadow-none" style="border: none; border-bottom: 1px solid black; border-radius: 0;" id="exampleFormControlInput1" placeholder="<?php echo $_SESSION['usuario']['usuario_nome']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input name="email" value='<?php echo $_SESSION['usuario']['usuario_email']; ?>' type="email" class="form-control shadow-none" style="border: none; border-bottom: 1px solid black; border-radius: 0;" id="exampleFormControlInput1" placeholder="<?php echo $_SESSION['usuario']['usuario_email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gênero</label>
                            <select name="genero" class="form-control shadow-none" id="exampleFormControlSelect1">
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Não Binario</option>
                                <option>Prefiro não dizer...</option>
                            </select>
                            <input id='file-upload' style="display: none;" type="file" name="arquivo" id="arquivo" accept="image/jpg, image/png, image/gif, image/jpeg">
                        </div>
                    </form>
                </div>
                <button class="btn btn-danger" style=" margin: 1rem 0.5rem; float:right;" onclick="">Cancelar</button>
                <button class="btn btn-success" style=" margin: 1rem 0.5rem; float:right;" onclick="openModal()">Salvar</button>
                <div id="myModal" class="Mmodal">
                    <div class="modal-content" id='Mjanela'>
                        <p>Antes precisamos confirmar sua identidade</p>
                        <form id="form-usuario" action="functions/atualizar_usuario.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Senha Atual</label>
                                <input name="senhaA" type="password" class="form-control shadow-none" style="border: none; border-bottom: 1px solid black; border-radius: 0;" id="exampleFormControlInput1" placeholder="*******">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Senha Nova</label>
                                <input name="usuario-senha" type="password" class="form-control shadow-none" style="border: none; border-bottom: 1px solid black; border-radius: 0;" id="exampleFormControlInput1" placeholder="*******">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Confirmação de senha</label>
                                <input name="senhaC" type="password" class="form-control shadow-none" style="border: none; border-bottom: 1px solid black; border-radius: 0;" id="exampleFormControlInput1" placeholder="*******">
                            </div>
                            <input type="hidden" value="" name="usuario-nome">
                            <input type="hidden" value="" name="usuario-email">
                            <input type="hidden" value="" name="usuario-genero">
                        </form>
                        <button class="btn btn-success" style=" margin: 1rem 0.5rem; float:right;" onclick="Alterar()">Salvar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/estudos.js"></script>
</body>

</html>