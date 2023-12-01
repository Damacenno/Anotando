        var opcoes_nav_main = $(".nav-main-option");
        var container_calendario =  $("#calendario");

        opcoes_nav_main.click(function() 
        {
            opcoes_nav_main.removeClass("main-selected");
            $(this).addClass("main-selected");
            var area_selecionada = $(this).attr("area");
            $(".calendario").hide(); // Esconde todas as áreas
            $("#" + area_selecionada).show(); // Mostra a área selecionada
        });

    