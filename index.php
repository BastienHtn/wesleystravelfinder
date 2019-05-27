<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <style>
            body {
                background-image: url("img/chureiTower.jpg");
                background-size: cover;
            }

            #logoWtf{
                max-height: 17vw;
                width: auto;
                margin-left: auto;
                margin-right: auto;
                margin-top: 3vw;
                display: block;
            }

            #logoIntro{
                animation-name: intro;
                animation-duration: 3s;
            }

            @keyframes intro{
                from {opacity: 0; margin-left: -100%; margin-right: 100%;}
                to {opacity: 1;}
            }

            #infos{
                text-align: center;
                color: white;
                font-size: 2vw;
                animation-name: introText;
                animation-duration: 3s;
                animation-delay: 1s;
            }

            @keyframes introText{
                from {opacity: 0;}
                to {opacity: 1;}
            }
        </style>
    </head>

    <body>
        <div id="logoIntro">
            <img id="logoWtf" src="img/wtfLogo.png">
        </div>
        <div id="infos" class="display-4">
            Un outil de gestion de voyages, que vous soyez seul ou accompagné...</br></br>
            <button type="button" class="btn btn-secondary" style="font-size: x-large;">Créer mon Voyage</button>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>