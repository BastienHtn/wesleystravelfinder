<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <img class="icon-fleche" id="fgauche" src="https://img.icons8.com/material-outlined/100/000000/back.png">
    <img class="icon-fleche" id="fdroite" src="https://img.icons8.com/material-outlined/100/000000/forward.png">
    <div class="progress rounded-pill">
        <div id="pbar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="resa-etape" id="resa-etape">
        <section id="etape1">
            <h1 class="resa-titre">Vous voyagez ...</h1>
            <div class="resa-etape-contenu">
                <div class="etape1-block">
                    <div id="etape1-choix-group" class="etape1-choix" onclick="etape1_choose('etape1-choix-group')">
                        <img src="../img/en_groupe-100.png"/>
                        <br>
                        <span class="etape1-label">En groupe</span>
                    </div>
                    <div id="etape1-choix-solo" class="etape1-choix" onclick="etape1_choose('etape1-choix-solo')">
                        <img src="../img/seul-100.png"/>
                        <br>
                        <span class="etape1-label">Seul</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="etape2">
            <h1 class="resa-titre">Vos centres d'intérêts ...</h1>
            <div class="resa-etape-contenu">
                <div class="etape2-block">
                    <h2>Sélectionnez vos centres d'intérêts</h2>
                    <div class="etape2-block-interet">
                        <img src="https://img.icons8.com/color/100/000000/food-and-wine.png">
                        <br>
                        <span>Gastronomie</span>
                    </div>
                    <div class="etape2-block-interet">
                        <img src="https://img.icons8.com/color/100/000000/alps.png">
                        <br>
                        <span>Paysage</span>
                    </div>
                    <div class="etape2-block-interet">
                        <img src="https://img.icons8.com/color/100/000000/museum.png">
                        <br>
                        <span>Culture</span>
                    </div>
                    <div class="etape2-block-interet">
                        <img src="https://img.icons8.com/color/100/000000/football2.png">
                        <br>
                        <span>Sport</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="etape3">
            <h1 class="resa-titre">Voyage en groupe ...</h1>
            <div class="resa-etape-contenu">
                <span>Etape 3</span>
            </div>
        </section>
        <section id="etape4">
            <h1 class="resa-titre">Votre offre de voyage ...</h1>
            <div class="resa-etape-contenu">
                <span>Etape 4</span>
            </div>
        </section>
    </div>
</body>
<script type="text/javascript">
var isSolo = false;
var isGroup = false;
    function etape1_choose(id)
    {
        if(id == 'etape1-choix-group')
        {
            isGroup = true;
            isSolo = false;
            $("#etape1-choix-group").attr("class", "etape1-choix-clicked");
            $("#etape1-choix-solo").attr("class", "etape1-choix");
        }
        else if(id == 'etape1-choix-solo')
        {
            isGroup = false;
            isSolo = true;
            $("#etape1-choix-group").attr("class", "etape1-choix");
            $("#etape1-choix-solo").attr("class", "etape1-choix-clicked");
        }
    }
</script>
</html>