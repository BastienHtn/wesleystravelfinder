$("#resa-etape").ready(function () {
    $("#etape1").addClass("active");

    $("#fgauche").click(function () {
        if ($("#etape2").hasClass("active")) {
            // On cache l'étape active 
            $("#etape2").removeClass("active");
            // On affiche l'étape d'avant
            $("#etape1").addClass("active");
            // Si on passe à l'étape 1 on cache la flèche de gauche
            $("#fgauche").css("display", "none");
            // On modifie la progress bar en fonction de l'étape
            $("#pbar").css("width", "0%");
        } else {
            if ($("#etape3").hasClass("active")) {
                $("#etape3").removeClass("active");
                $("#etape2").addClass("active");
                $("#pbar").css("width", "50%");
                $("#pbar").css("background-color", "darkorchid");
                $("#pbar").addClass("progress-bar-striped");
                $("#fdroite").css("display", "block");
            }
            // } else {
            //     if ($("#etape4").hasClass("active")) {
            //         $("#etape4").removeClass("active");
            //         $("#etape3").addClass("active");
            //         $("#fdroite").css("display", "block");
            //         $("#pbar").css("width", "75%");
            //     }
            // }
        }
    });

    $("#fdroite").click(function () {
        if ($("#etape1").hasClass("active")) {
            // On cache l'étape active
            $("#etape1").removeClass("active");
            // On affiche l'étape suivante 
            $("#etape2").addClass("active");
            // On affiche la flèche de gauche si on passe à l'étape 2 pour pouvoir revenir en arrière
            $("#fgauche").css("display", "block");
            // On modifie la progress bar en fonction de l'étape
            $("#pbar").css("width", "50%");
        } else {
            if ($("#etape2").hasClass("active")) {
                $("#etape2").removeClass("active");
                $("#etape3").addClass("active");
                $("#pbar").css("background-color", "#28a745");
                $("#pbar").css("width", "100%");
                $("#pbar").removeClass("progress-bar-striped");
                $("#fdroite").css("display", "none");
            }
            // } else {
            //     if ($("#etape3").hasClass("active")) {
            //         $("#etape3").removeClass("active");
            //         $("#etape4").addClass("active");
            //         $("#fdroite").css("display", "none");
            //         $("#pbar").css("width", "100%");
            //     }
            // }
        }
    });
});