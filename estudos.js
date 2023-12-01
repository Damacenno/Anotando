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

function Altera(){
    console.log("Alterar");
}