$("#resa-etape").ready(function () {
    $("#etape1").addClass("active");

    $("#fgauche").click(function () {
        if ($("#etape2").hasClass("active")) {
            $("#etape2").removeClass("active");
            $("#etape1").addClass("active");
            $("#fgauche").css("display", "none");
        } else {
            if ($("#etape3").hasClass("active")) {
                $("#etape3").removeClass("active");
                $("#etape2").addClass("active");
            } else {
                if ($("#etape4").hasClass("active")) {
                    $("#etape4").removeClass("active");
                    $("#etape3").addClass("active");
                    $("#fdroite").css("display", "block");
                }
            }
        }
    });

    $("#fdroite").click(function () {
        if ($("#etape1").hasClass("active")) {
            $("#etape1").removeClass("active");
            $("#etape2").addClass("active");
            $("#fgauche").css("display", "block");
        } else {
            if ($("#etape2").hasClass("active")) {
                $("#etape2").removeClass("active");
                $("#etape3").addClass("active");
            } else {
                if ($("#etape3").hasClass("active")) {
                    $("#etape3").removeClass("active");
                    $("#etape4").addClass("active");
                    $("#fdroite").css("display", "none");
                }
            }
        }
    });
});