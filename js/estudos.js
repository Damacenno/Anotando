var opcoes_nav_main = $(".nav-main-option");
opcoes_nav_main.click(function () {
    opcoes_nav_main.removeClass("main-selected");
    $(this).addClass("main-selected");
});

$('#file-upload').bind('change', function () {
    var fileName = '';
    fileName = $(this).val();
    var final = fileName.replace('C:\\fakepath\\',': ')
    $('#file-selected').html(final);
})



function openModal(){
    document.getElementById( 'myModal' ).style.display = 'flex';
    document.querySelector('[name="usuario-nome"]').value =  document.querySelector('[name="nome"]').value;
    document.querySelector('[name="usuario-email"]').value =  document.querySelector('[name="email"]').value;
    document.querySelector('[name="usuario-genero"]').value =  document.querySelector('[name="genero"]').value;
}

function Alterar(){
    var senhaN = document.querySelector('[name="usuario-senha"]').value;
    var senhaC = document.querySelector('[name="senhaC"]').value;

    if (senhaN == senhaC){
        document.getElementById('form-usuario').submit();    
    }else {
        console.log("Não é igual");
    }
    
}
