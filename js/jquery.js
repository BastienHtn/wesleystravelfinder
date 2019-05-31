$("#resa-etape").ready(function () {
    $("#etape1").addClass("active");

    $("#fgauche").click(function () {
        if ($("#etape2").hasClass("active")) {
            $("#etape2").removeClass("active");
            $("#etape1").addClass("active");
            $("#fgauche").css("display", "none");
            $("#pbar").css("width", "25%");
        } else {
            if ($("#etape3").hasClass("active")) {
                $("#etape3").removeClass("active");
                $("#etape2").addClass("active");
                $("#pbar").css("width", "50%");
            } else {
                if ($("#etape4").hasClass("active")) {
                    $("#etape4").removeClass("active");
                    $("#etape3").addClass("active");
                    $("#fdroite").css("display", "block");
                    $("#pbar").css("width", "75%");
                }
            }
        }
    });

    $("#fdroite").click(function () {
        if ($("#etape1").hasClass("active")) {
            $("#etape1").removeClass("active");
            $("#etape2").addClass("active");
            $("#fgauche").css("display", "block");
            $("#pbar").css("width", "50%");
        } else {
            if ($("#etape2").hasClass("active")) {
                $("#etape2").removeClass("active");
                $("#etape3").addClass("active");
                $("#pbar").css("width", "75%");
            } else {
                if ($("#etape3").hasClass("active")) {
                    $("#etape3").removeClass("active");
                    $("#etape4").addClass("active");
                    $("#fdroite").css("display", "none");
                    $("#pbar").css("width", "100%");
                }
            }
        }
    });
});