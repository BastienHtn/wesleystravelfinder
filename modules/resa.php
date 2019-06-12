<?php
    if (!isset($_SESSION['nickname'])) {
        header('Location: accueil.php?page=connexion');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <img class="icon-fleche" id="fgauche" src="../img/icons8-chevron-gauche-filled-50.png">
    <img class="icon-fleche" id="fdroite" src="../img/icons8-chevron-droit-filled-50.png">

    <div class="resa-etape" id="resa-etape" style="flex-grow: 1;">

        <section id="etape1">
            <h1 class="resa-titre display-4">Vous voyagez</h1>
            <div class="resa-etape-contenu">
                <div class="etape1-block">
                    <div id="etape1-choix-group" class="etape1-choix" onclick="etape1_choose('etape1-choix-group')">
                        <img src="../img/en_groupe-100.png"/>
                        <br>
                        <span class="etape1-label display-4">En groupe</span>
                    </div>
                    <div id="etape1-choix-solo" class="etape1-choix" onclick="etape1_choose('etape1-choix-solo')">
                        <img src="../img/seul-100.png"/>
                        <br>
                        <span class="etape1-label display-4">Seul</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="etape2">
            <h1 class="resa-titre display-4">Vos centres d'intérêts</h1>
            <div class="resa-etape-contenu">
                <div class="etape2-block">
                    <div id="etape2-seul">
                        <h2>Sélectionnez vos centres d'intérêts</h2>
                        <div class="etape2-block-interet">
                            <div style="position: relative;" id="interet-food" onclick="etape2_choose('interet-food')">
                                <img src="https://img.icons8.com/color/100/000000/food-and-wine.png">
                                <img id="interet-food-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                <img id="interet-food-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                            </div>
                            <br>
                            <span>Gastronomie</span>
                        </div>
                        <div class="etape2-block-interet">
                            <div style="position: relative;" id="interet-landscape" onclick="etape2_choose('interet-landscape')">
                                <img src="https://img.icons8.com/color/100/000000/alps.png">
                                <img id="interet-landscape-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                <img id="interet-landscape-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                            </div>
                            <br>
                            <span>Paysage</span>
                        </div>
                        <div class="etape2-block-interet">
                            <div style="position: relative;" id="interet-culture" onclick="etape2_choose('interet-culture')">
                                <img src="https://img.icons8.com/color/100/000000/museum.png">
                                <img id="interet-culture-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                <img id="interet-culture-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                            </div>
                            <br>
                            <span>Culture</span>
                        </div>
                        <div class="etape2-block-interet">
                            <div style="position: relative;" id="interet-sport" onclick="etape2_choose('interet-sport')">
                                <img src="https://img.icons8.com/color/100/000000/football2.png">
                                <img id="interet-sport-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                <img id="interet-sport-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                            </div>
                            <br>
                            <span>Sport</span>
                        </div>
                    </div>



                    <div id="etape2-groupe" class="p-3 shadow-lg mb-5">
                        <div class="etape2-block-groupe mt-1 shadow-lg text-center">
                        <div class="etape2-groupe-nom">
                            <input type="text" value="<?php echo $_SESSION['nickname']; ?>" disabled>
                        </div>
                        <div id="critere" style="margin-left:auto;">
                            <div class="etape2-block-interet">
                                <div style="position: relative;" id="interet-food" onclick="etape2_choose('interet-food')">
                                    <img src="https://img.icons8.com/color/100/000000/food-and-wine.png">
                                    <img id="interet-food-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                    <img id="interet-food-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                                </div>
                                <br>
                                <span>Gastronomie</span>
                                </div>
                                <div class="etape2-block-interet">
                                    <div style="position: relative;" id="interet-landscape" onclick="etape2_choose('interet-landscape')">
                                        <img src="https://img.icons8.com/color/100/000000/alps.png">
                                        <img id="interet-landscape-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                        <img id="interet-landscape-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                                    </div>
                                    <br>
                                    <span>Paysage</span>
                                </div>
                                <div class="etape2-block-interet">
                                    <div style="position: relative;" id="interet-culture" onclick="etape2_choose('interet-culture')">
                                        <img src="https://img.icons8.com/color/100/000000/museum.png">
                                        <img id="interet-culture-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                        <img id="interet-culture-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                                    </div>
                                    <br>
                                    <span>Culture</span>
                                </div>
                                <div class="etape2-block-interet">
                                    <div style="position: relative;" id="interet-sport" onclick="etape2_choose('interet-sport')">
                                        <img src="https://img.icons8.com/color/100/000000/football2.png">
                                        <img id="interet-sport-x" class="icon-validate" src="https://img.icons8.com/cotton/64/000000/cancel.png">
                                        <img id="interet-sport-v" class="icon-validate desactive" src="https://img.icons8.com/cotton/64/000000/checkmark.png">
                                    </div>
                                    <br>
                                    <span>Sport</span>
                                </div>
                            </div>
                        </div>
                        <div class="etape2-groupe-ajout" id="add">
                            <img src="https://img.icons8.com/android/24/000000/plus.png" onclick="etape2_add()">
                        </div>
                    </div>






                </div>
            </div>
        </section>
        <section id="etape3">
            <h1 class="resa-titre display-4" id="etape3-titre">Voyage</h1>

            <div class="resa-etape-contenu" id="etape3-seul">
                    
                <div class="etape3-offre-seul shadow-lg">
                    <div class="etape3-offre-voyage shadow-lg">
                        <img src="../img/japonDest.jpg" class="rounded-left">
                        <div class="etape3-offre-texte">
                            <h2 class="display-4">Japon</h2>
                            <span class="lead">Description du Japon ...</span>
                        </div>
                        <div class="etape3-offre-prix">
                            <span class="lead">Prix moyen d'un voyage (2 semaines)</span>
                            <h2 class="lead">3200 €</h2>
                        </div>

                    </div>
                    <div class="etape3-offre-voyage shadow-lg">
                        <img src="../img/italieDest.jpg" class="rounded-left">
                        <div class="etape3-offre-texte">
                            <h2 class="display-4">Italie</h2>
                            <span class="lead">Description de l'Italie ...</span>
                        </div>
                        <div class="etape3-offre-prix">
                            <span class="lead">Prix moyen d'un voyage (2 semaines)</span>
                            <h2 class="lead">3000 €</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="progress rounded-pill mb-5" id="progress">
        <div id="pbar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%; height: 7vh;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</body>


<script type="text/javascript">
var isSolo = false;
var isGroup = false;
var tabInteret = [false, false, false, false];
var nbMembre = 1;

    function etape1_choose(id)
    {
        if(id == 'etape1-choix-group')
        {
            isGroup = true;
            isSolo = false;
            $("#etape1-choix-group").attr("class", "etape1-choix-clicked");
            $("#etape1-choix-solo").attr("class", "etape1-choix");
            $("#etape3-titre").html("Voyage en groupe");
            $("#etape2-seul").css("display", "none");
            $("#etape2-groupe").css("display", "block");
            if ($("#fdroite").css("display", "none")) {
                $("#fdroite").css("display", "block");
            }
        }
        else if(id == 'etape1-choix-solo')
        {
            isGroup = false;
            isSolo = true;
            $("#etape1-choix-group").attr("class", "etape1-choix");
            $("#etape1-choix-solo").attr("class", "etape1-choix-clicked");
            $("#etape3-titre").html("Voyage seul");
            $("#etape2-seul").css("display", "block");
            $("#etape2-groupe").css("display", "none");
            if ($("#fdroite").css("display", "none")) {
                $("#fdroite").css("display", "block");
            }
        }
    }

    function etape2_add() {
        nbMembre++;
        var idDiv = "newBlock" + nbMembre;
        var idDivNom = "newBlockNom" + nbMembre;
        $("<div/>", {
            "id": idDiv,
            "class": "etape2-block-groupe mt-1 shadow-lg text-center"
        }).insertBefore("#add");
        $("<div/>", {
            "id": idDivNom,
            "class": "etape2-groupe-nom",
        }).appendTo("#" + idDiv);
        $("<input/>", {
            "placeholder": "Saisir un nom",
        }).appendTo("#" + idDivNom);
        var clone = $("#critere").clone();
        clone.find(".icon-validate").attr("src", "https://img.icons8.com/cotton/64/000000/cancel.png");
        clone.appendTo("#" + idDiv);
    }

    function etape2_choose(id) {
        if (event.srcElement.src == "https://img.icons8.com/cotton/64/000000/cancel.png") {
            event.srcElement.src = "https://img.icons8.com/cotton/64/000000/checkmark.png";
        } else {
            if (event.srcElement.src == "https://img.icons8.com/cotton/64/000000/checkmark.png") {
                event.srcElement.src = "https://img.icons8.com/cotton/64/000000/cancel.png";
            }
        }
    }
</script>
</html>
