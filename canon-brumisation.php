<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/dyna-style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-brumisation">
<?php
//Navigation
include_once("./partials/menu.inc");
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Canon Brumiseur
                <small> Contrôle des poussières par conon de projection d'eau</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Accueil</a>
                </li>
                <li><a href="#">Produits</a>
                </li>
                <li class="active">Canon Brumiseur</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content Canon à roue d'ejection d'eau-->
    <div class="row">
        <div class="col-md-6 jumbotron">
            <h2>Pourquoi un système de projection d'eau?</h2>

            <p> Les systèmes de captation de poussières à sec (tels les dépoussiéreurs) sont très efficaces, mais
                représentent souvent un investissement important. Les dépoussiéreurs sont utilisés pour les points
                d‘émission où il y a une très grande génération de poussières, de l’ordre de plusieurs tonnes à l’heure.
            </p>

            <p>Par contre, si votre produit peut supporter d’être arrosé d’eau sans se dégrader, alors l’alternative des
                canons à projection d’eau devient intéressante.</p>

            <p>Les systèmes de projections à l’eau fonctionnent en forçant la poussière produite à se coller au produit,
                l’empêchant de s’échapper à l’air libre.</p>
        </div>
        <div class="col-md-6">
            <figure>
                <img class="img-responsive" src="images/products/canon-brumiseur-en-fonction.jpg" alt="">
                <figcaption>Canon brimuseur en fonction.</figcaption>
            </figure>
            <figure>
                <img class="img-responsive" src="images/products/canon-brumiseur-arret.jpg" alt="">
                <figcaption>Canon brimuseur à l'arrêt.</figcaption>
            </figure>
        </div>
    </div>
    <hr/>
    <!-- /.row -->

    <!-- Type de brimiseurs-->
    <div class="row" id="type-brimuseurs">
        <h2>Les trois type de canon-brimuseurs</h2>

        <div class="col-md-4">
            <h3>A. Système avec roue l’éjection</h3>

            <p>Ce système crée les plus grosses gouttelettes d’eau (
                <mark>500 microns</mark>
                ). C’est
                une technologie très économique, qui est utilisée pour la gestion <strong>d‘émission légère de
                    poussière ou de
                    gestion l’odeur</strong> grâce à un additif dans l’eau.
            </p>
            <h4>Charactéristiques</h4>

            <p>Disponible en version murale, sur pôle ou autonome</p>
            <ul>
                <li> Projection jusqu’à 30 mètres (100 pieds)</li>
                <li> Consomation d’eau ajustable entre 15 et 50 gallon / minute</li>
                <li> Gouttelettes de 500 microns</li>
                <li> Roue d’éjection ajustable entre 2000 et 11000 RPM</li>
                <li> Ventilateur alimenté par 110v ou 220v</li>
                <li> Fabrication en acier</li>
                <li> Option possible d’un moteur d’oscillation 120°</li>
                <li> Coût
                    <mark>±14,000 $CAD</mark>
                </li>
            </ul>
            <figure>
                <img class="img-responsive img-thumbnail" src="images/products/canon-a-roue-d-ejection.png"
                     alt=""/>
                <figcaption>
                    Canon à roue d'ejection d'eau
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <h3>B. Système par atomisation</h3>

            <p> Ce système créedes gouttelettes de l‘ordre de
                <mark> 150-400 microns</mark>
                . Cette
                technologie permet de <strong>couvrir une très grande superficie et de coucher la poussière au
                    sol</strong> ou sur les
                équipements.
            </p>
            <h4>Charactéristiques</h4>

            <p>Disponible en version murale, sur pôle ou autonome</p>
            <ul>
                <li> Projection entre 25 et 100 mètres (80 et 330 pieds)</li>
                <li> Consommation d’eau
                    <ul>
                        <li><strong>Génération 2A :</strong> 30 @ 50 gallons / minute</li>
                        <li><strong>Génération 2B :</strong> 5 @ 20 gallons / minute</li>
                    </ul>
                </li>
                <li> Gouttelettes de 150 @ 400 microns</li>
                <li> Pression d’eau entre 40 et 200 psig</li>
                <li> Ventilateur variant de 7.5 @ 60 HP</li>
                <li> Fabrication en acier</li>
                <li> Option possible d’un moteur d’oscillation 359°</li>
                <li> Coût
                    <mark>±20,000 $CAD</mark>
                </li>
            </ul>
            <figure>
                <img class="img-responsive img-thumbnail" src="images/products/canon-a-atomisation.png"
                     alt=""/>
                <figcaption>Canon de brumisation par atomisation</figcaption>
            </figure>

        </div>
        <div class="col-md-4">
            <h3>C. Système de brumisation à haute pression</h3>

            <p> Ce système crée des gouttelettes de l’ordre de
                <mark>5-10 microns.</mark>
                Cette technologie utilisant de très fines gouttelettes permet de contrôler la poussière en
                minimisant l’effet d’accumulation d’eau, et s’avère <strong> plus efficace sur les fortes
                    émissions de
                    très fines poussières</strong>.
            </p>
            <h4>Charactéristiques</h4>

            <p>Disponible en version murale, sur pôle ou autonome</p>
            <ul>
                <li> Projection entre 15 et 50 mètres (50 et 165 pieds)</li>
                <li> Consommation d’eau 1.2 @ 5 gallons / minute</li>
                <li> Enveloppe d’eau de 5 @ 10 µm</li>
                <li> Pression d’eau entre 250 et 1700 psig</li>
                <li> Ventilateur variant de 3 @ 20 HP</li>
                <li> Fabrication en fibre de verre / acier inoxydable</li>
                <li> Option possible d’un moteur d’oscillation 359°</li>
                <li> Coût
                    <mark>±24,000$CAD</mark>
                </li>
            </ul>
            <figure>
                <img class="img-responsive img-thumbnail"
                     src="images/products/canon-a-brumiseur-haute-pression.jpg" alt=""/>
                <figcaption>
                    Canon de brumisation à haute pression
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="row">
        <h3>Exemple de consommation d’eau </h3>
        <h4>Pour une projection de 80 pieds</h4>
        <ol>
            <li><b>Système avec roue l’éjection</b>:
                <mark>50 gallons / min</mark>
                .
            </li>
            <li><b>Système par atomisation</b>:
                <mark>20 gallons / min</mark>
                .
            </li>
            <li><b>Système de brumisation à haute pression</b>:
                <mark>2.2 gallons / min</mark>
                .
            </li
        </ol>


    </div>
    <hr/>
    <!-- /.row -->
    <!-- Call to Action Section -->
    <div class="well" id="call-to-action">
        <div class="row">
            <div class="col-md-8">
                <p>Nous fabriquons, à l'aide de nos partenaires basés au québec, des solutions
                    sur mesure, qui répondent à vos besoins spécifiques. La qualité de nos produits
                    et les délais de livraison sont nos premiers soucis. En faisant appel à nos
                    services, vous êtes sûr d'avoir le meilleur produit et service et être livré
                    dans des délais raisonables. Prenez contact avec nos représentants sans plus tarder.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="contact.php">Contactez-nous</a>
            </div>
        </div>
    </div>
    <hr>

    <hr>
</div>
<!-- /.container -->
<!-- footer-->
<?php
include_once("./partials/footer.inc");
?>
<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
