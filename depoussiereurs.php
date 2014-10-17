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

<body id="dust-collectors">
<?php
//Navigation
include_once("./partials/menu.inc");
?>

<!-- Page Content -->
<div class="container">

<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Les dépoussiéreurs
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a>
            </li>
            <li><a href="#">Produits</a>
            </li>
            <li class="active">Dépoussièreurs</li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- Intro Content -->
<div class="row">
    <div class="col-md-6">
        <img class="img-responsive" src="images/products/depoussieur.JPG" alt="">
    </div>
    <div class="col-md-6">
        <h2>C'est quoi un dépoussiéreur ?</h2>

        <p class="text-big">La fonction primaire d’un dépoussiéreur est de filtrer un volume d’air contenant des
            particules en provenance de stations de travail, d’équipements, d’outils et de procédés industriels. Le
            volume d’air sortant du dépoussiéreur, dépourvu des particules non désirées, peut ensuite être remis en
            circulation à l’intérieur du bâtiment ou déchargé à l’extérieur dépendant de l’application en cause.</p>
    </div>
</div>
<!-- /.row -->
<!-- Dépoussiéreurs à filtres Tabs -->
<div class="row">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="page-header">Dépoussiéreurs à Filtre</h2>
            <hr class="star-primary">
        </div>
        <figure class="text-center">
            <img class="img-thumbnail img-responsive" style="width: 25em"
                 src="http://lorempixel.com/500/300/animals" alt=""/>
            <figcaption>Depoussiereur à cartouche de Dynagroup</figcaption>
        </figure>
    </div>
    <div class="col-lg-12">

        <ul id="myTab" class="nav nav-tabs nav-justified">
            <li class="active"><a href="#desc" data-toggle="tab"><i class="fa fa-info"></i>
                    Description</a>
            </li>
            <li class=""><a href="#advantages" data-toggle="tab"><i class="fa fa-dot-circle-o"></i> Avantages</a>
            </li>
            <li class=""><a href="#specs" data-toggle="tab"><i class="fa fa-cogs"></i> Charactéristiques</a>
            </li>
            <li class=""><a href="#options" data-toggle="tab"><i class="fa fa-check-square-o"></i> Options</a>
            </li>

        </ul>

        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="desc">
                <h4>C'est quoi un dépoussiéreur à filtre </h4>

                <p>Le dépoussiéreur carré de Concept-air est parfaitement adapté pour filtrer les particules lourdes
                    et abrasives et tout indiqué pour les produits susceptibles de créer des problèmes d’électricité
                    statique. Deux catégories de modèles basées sur des modes de nettoyage différents sont offertes
                    : un modèle par jet d’air pneumatique et l’autre par secoueur mécanique. Dans tous les cas, ces
                    équipements offrent une puissance supérieure et la qualité des produits signés Concept-air.</p>
            </div>
            <div class="tab-pane fade" id="advantages">
                <h4>Les principaux avantages</h4>

                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-heart"></i>Puissant, l’appareil accepte bien les particules lourdes et
                        abrasives
                    </li>
                    <li><i class="fa-li fa fa-heart"></i>Idéal pour remédier à un problème d’électrostatique (par
                        exemple, pour aspirer des
                        particules de styromousse)
                    </li>
                    <li><i class="fa-li fa fa-heart"></i>Compact, occupe moins d’espace au sol</li>
                    <li><i class="fa-li fa fa-heart"></i>Permet la recirculation de l’air</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="specs">
                <h4>Les principales caractéristiques</h4>

                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-heart"></i>Construction en acier doux</li>
                    <li><i class="fa-li fa fa-heart"></i>Panneau anti-déflagration</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="options">
                <h4>Options disponibles</h4>

                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-heart"></i>Construction en acier inoxydable</li>
                    <li><i class="fa-li fa fa-heart"></i>Isolation pour le contrôle de la condensation</li>
                </ul>
            </div>


        </div>

    </div>
</div>
<!-- Dépoussiéreurs à Cartouches Tabs -->
<div class="row">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="page-header">Dépoussiéreurs à
                Cartouche</h2>
            <hr class="star-primary">
        </div>
        <figure class="text-center">
            <img class="img-thumbnail img-responsive" style="width: 25em"
                 src="http://lorempixel.com/500/300/sports" alt=""/>
            <figcaption>Depoussiereur à cartouche de Dynagroup</figcaption>
        </figure>
    </div>
    <div class="col-lg-12">

        <ul id="myTab" class="nav nav-tabs nav-justified">
            <li class="active"><a href="#desc2" data-toggle="tab"><i class="fa fa-info"></i>
                    Description</a>
            </li>
            <li class=""><a href="#advantages2" data-toggle="tab"><i class="fa fa-dot-circle-o"></i> Avantages</a>
            </li>
            <li class=""><a href="#specs2" data-toggle="tab"><i class="fa fa-cogs"></i> Charactéristiques</a>
            </li>
            <li class=""><a href="#options2" data-toggle="tab"><i class="fa fa-check-square-o"></i> Options</a>
            </li>

        </ul>

        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="desc2">
                <h4>C'est quoi un Dépoussiéreur à cartouche </h4>

                <p>Le type de dépoussiéreur le plus compact de Concept-air, sans compromis sur la robustesse. Conçu
                    pour un usage extérieur, il peut aussi être installé à l’intérieur en raison de ses petites
                    dimensions. Sa force : sa capacité de filtration supérieure. Ce dépoussiéreur à cartouche,
                    équipé d’un dispositif de nettoyage par jet d’air comprimé, filtre des particules très fines en
                    concentrations modérées.</p>

            </div>
            <div class="tab-pane fade" id="advantages2">
                <h4>Les principaux avantages</h4>

                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-heart"></i>Filtre les particules les plus fines, y compris les fumées et
                        les poussières farineuses
                    </li>
                    <li><i class="fa-li fa fa-heart"></i>Idéal pour remédier à un problème d’électrostatique (par
                        exemple, pour aspirer des
                        particules de styromousse)
                    </li>
                    <li><i class="fa-li fa fa-heart"></i>Économique</li>
                    <li><i class="fa-li fa fa-heart"></i>Compact, faible empreinte au sol</li>
                    <li><i class="fa-li fa fa-heart"></i>Permet la recirculation de l’air</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="specs2">
                <h4>Les principales caractéristiques</h4>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-heart"></i>Construction en acier doux</li>
                    <li><i class="fa-li fa fa-heart"></i>Détecteur thermique</li>
                    <li><i class="fa-li fa fa-heart"></i>Porte d'accès</li>
                    <li><i class="fa-li fa fa-heart"></i>Bac de récupération</li>
                    <li><i class="fa-li fa fa-heart"></i>Nettoyage par jet d’air comprimé</li>
                </ul>

            </div>
            <div class="tab-pane fade" id="options2">
                <h4>Options disponibles</h4>

                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-heart"></i>Peut-être fabriqué en acier inoxydable, acier antiabrasion</li>
                    <li><i class="fa-li fa fa-heart"></i>Échelle et palier</li>
                    <li><i class="fa-li fa fa-heart"></i>Dépoussiéreur mobile</li>
                </ul>
            </div>


        </div>

    </div>
</div>

<!-- Modification de systèmes existants -->
<div class="row">
    <div class="col-md-6">
        <h2>Modification de systèmes existant</h2>

        <p style="font-size: x-large">La fonction primaire d’un dépoussiéreur est de filtrer un volume d’air contenant
            des
            particules en provenance de stations de travail, d’équipements, d’outils et de procédés industriels. Le
            volume d’air sortant du dépoussiéreur, dépourvu des particules non désirées, peut ensuite être remis en
            circulation à l’intérieur du bâtiment ou déchargé à l’extérieur dépendant de l’application en cause.</p>
    </div>
    <div class="col-md-6">
        <img class="img-responsive"
             src="http://3sdeveloppement.fr/82-thickbox_default/modification-pipe-dadmission-pour-injection-electronique-r5-turbo-piece-fournie-par-le-client-modification-pipe-dadmission-pour-.jpg"
             alt="">
    </div>
</div>
<!-- /.row -->
<!-- Call to Action Section -->
<div class="well" id="call-to-action">
    <div class="row">
        <div class="col-md-8">
            <p>Nous fabriquons, à l'aide de nos partenaires basés au québec, des dépoussiéreurs
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
