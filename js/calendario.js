var opcoes_nav_main = $(".nav-main-option");
var container_calendario =  $("#calendario");
var lineBurguer = document.getElementById("burguer");
var sideMenu = document.querySelector(".container-SideMenu");


criarGrupo.addEventListener('click',()=>{
  modalCriarGrupo.style.display="block";
  sideMenu.classList.remove("sideShow");
  lineBurguer.classList.remove("active");
  lineBurguer.classList.remove("burgerSlide");
})

function openCloseChat() {
  if (sideMenu.classList.contains("sideShow")) {
  } else {
    lineBurguer.classList.remove("active");
  }
  containerChat.classList.toggle("chatClose");
}

function openCloseSideMenu() {
  sideMenu.classList.toggle("sideShow");
  if (sideMenu.classList.contains("sideShow")) {
    lineBurguer.classList.add("burgerSlide");
    lineBurguer.classList.add("active");
    barra_pesquisa.style.filter = "brightness(0.10)";
    lineBurguer.style.filter = "brightness(1.0)";
    grupos.forEach((grupo) => {
      grupo.style.filter = "brightness(0.10)";
    });
  } else {
    lineBurguer.classList.remove("active");
    lineBurguer.classList.remove("burgerSlide");
    grupos.forEach((grupo) => {
      grupo.style.filter = "brightness(1)";
    });
    // Redefinir o filtro de brilho para .caixa-grupos e .toggle quando o menu lateral for fechado
    barra_pesquisa.style.filter = "brightness(1.0)";
    lineBurguer.style.filter = "brightness(1.0)";
  }
}

lineBurguer.addEventListener("click", () => {
  openCloseSideMenu();
});

opcoes_nav_main.click(function() 
{
    opcoes_nav_main.removeClass("main-selected");
    $(this).addClass("main-selected");
    var area_selecionada = $(this).attr("area");
    console.log(area_selecionada);
    $(".areas").hide(); // Esconde todas as áreas
    $("#" + area_selecionada).css("display","flex"); // Mostra a área selecionada
});

    $(".card_evento_container").click(function(){
        $(".card_evento_container").toggleClass("show_card_evento_container");
        $(".card_evento_detalhes").toggleClass("show_card_evento_detalhes");
    })
