<!DOCTYPE html>
<html lang="en">
<!-- @TODO see the brochures for the text

 -->
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

<body>
<?php
//Navigation
include_once("./partials/menu.inc");
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Système de Fluidisation Par Balayeurs d'Air Pulsé
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Accueil</a>
                </li>
                <li><a href="#">Produits</a>
                </li>
                <li class="active">Fluidisation</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-6">
            <figure>
                <img class="img-responsive" src="images/products/systeme_fluidisation.jpg" alt="">
            </figure>
        </div>
        <div class="col-md-6 jumbotron">
            <h2>Problèmes d'écoulement dans vos silos ou trémies ?</h2>

            <p>Le système de fluidisation par balayeurs d’air pulsé de Dynagroup est un système efficace et éprouvé pour
                l’amélioration du flux de produits lors de la décharge de vos silos et trémies.</p>

            <p>Ce système s’avère une solution avantageuse et souvent plus efficace que les techniques traditionnelles
                tels
                les vibrateurs, les coussins d’air, etc.</p>

        </div>
    </div>
    <!-- /.row -->
    <!-- Principe de fonctionnement Balayeurs d'air -->
    <div class="row">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="page-header">Principle de fonctionnement</h2>
                <hr class="star-primary">
                <div class="jumbotron">
                    <p>Les balayeurs fonctionnent en envoyant un puissant jet d’air dirigé entre la parois et le
                        matériel, ce
                        qui
                        balaie et soulève le produit. Le matériel ainsi soulevé tombe vers la décharge, et initie ainsi
                        un flux
                        continu. L’activation en séquence de plusieurs balayeurs positionnés stratégiquement, assure
                        donc que le
                        matériel
                        circule librement et facilement vers la décharge.</p></div>
            </div>
            <figure class="text-center">
                <img class="img-responsive img-thumbnail" src="images/products/schema_balayeur_air.png"
                     style="width: 45em;" alt="">
            </figure>
            <figure class="text-center">
                <img class="img-responsive img-thumbnail" src="images/products/balayeur_air.JPG" style="width: 20em;"
                     alt="">
                <img class="img-responsive img-thumbnail" src="images/products/balayeur_air_fonctionnement.png"
                     style="width: 20em;" alt="">
                <figcaption>Principle de fonctionnement des balayeurs d'air pulsé
                </figcaption>
            </figure>
        </div>
    </div>
    <!-- Avantage Balayeurs d'air -->
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="page-header">Les principaux avantages des balayeurs d'air</h2>
            <hr class="star-primary">
        </div>
    </div>
    <!-- /.row -->
    <div class="row" id="airsweep_advantages">
        <div class="jumbotron">
            <ul class="fa-ul">
                <li><i class="fa-li fa fa-angle-right"></i> Augmentation du flux de matériel</li>
                <li><i class="fa-li fa fa-angle-right"></i> Faible consommation d’air comprimé</li>
                <li><i class="fa-li fa fa-angle-right"></i> Conception sans blocage</li>
                <li><i class="fa-li fa fa-angle-right"></i> Active jusqu’à 8 pieds de diamètre de produit</li>
                <li><i class="fa-li fa fa-angle-right"></i> Opération jusqu’à 900°F</li>
                <li><i class="fa-li fa fa-angle-right"></i> Une seule pièce mobile</li>
                <li><i class="fa-li fa fa-angle-right"></i> Virtuellement sans maintenance</li>
                <li><i class="fa-li fa fa-angle-right"></i> Permet l’utilisation de la pleine capacité des silos et des
                    trémies
                </li>
                <li><i class="fa-li fa fa-angle-right"></i> Installation et maintenance par l’extérieur</li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

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
