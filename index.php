<?php
// TODO Fill the menu --DONE
// TODO play with color --DONE
// TODO Add date of the day (added the full year) --DONE
// TODO make it online with private access --DONE
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dynagroup Technologies, specialiste des solutions de dépoussièrage sur mesure.">
    <meta name="author" content="Dynagroup Technologies">
    <!-- Favicon image -->
    <link rel="shortcut icon" href="./images/favicon.ico"/>
    <link rel="apple-touch-icon" href="./images/favicon.ico"/>

    <title>Dynagroup Technologies - Page d'accueil</title>

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

// header carousel
include_once("./partials/carousel.inc");
?>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenue chez Dynagroup Technologies.
                <small>Solutions de dépoussièrage sur mesure</small>
            </h1>
        </div>
    </div>
    <div class="row equal" id="marketing-icons">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-life-ring"></i> Ingénierie et fourniture</h4>
                </div>
                <div class="panel-body">
                    <p>L'un de nos principaux service est l'ingénierie et la fourniture de nouveaux systèmes de
                        traitement des poussières.
                        Ce service comprend, entre autre: </p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i>Visite et relevés pour bien comprendre les systèmes
                            en place et problématiques encourues.
                        </li>
                        <li><i class="fa-li fa fa-hand-o-right"></i>Design et élaboration de solutions de traitement des
                            poussières en collaboration avec nos
                            clients.
                        </li>
                        <li><i class="fa-li fa fa-hand-o-right"></i>Fabrication d'unité de dépoussiérage, convoiement
                            pneumatique, etc.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="glyphicon glyphicon-wrench"></i> Maintenance</h4>
                </div>
                <div class="panel-body">
                    <p>La maintenance des systèmes de dépoussiérage existants est aussi au cœur de notre métier. Elle
                        comprend notamment: </p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i>Visite pour inspection complète d'unités de
                            dépoussiérage existantes afin de les rendre
                            optimales et efficaces selon la réalité de nos clients.
                        </li>
                        <li><i class="fa-li fa fa-hand-o-right"></i>Formation de votre personnel afin que ceux-ci puisse
                            effectuer des inspections de
                            maintenance adéquates et garde vos équipements en bon ordre.
                        </li>
                        <li><i class="fa-li fa fa-hand-o-right"></i> Fourniture et installation de pièces de rechange
                            pour unité de traitement des poussières.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-cog"></i>Installation</h4>
                </div>
                <div class="panel-body">
                    <p>Nous faisons aussi l'installation mécanique complète des systèmes de traitement des
                        poussières.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nos Réalisations</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-responsive img-hover" src="http://lorempixel.com/500/300/sports" alt="">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-responsive img-hover" src="http://lorempixel.com/500/300/food" alt="">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-responsive img-hover" src="http://lorempixel.com/500/300/nature" alt="">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-responsive img-hover" src="http://lorempixel.com/500/300/city" alt="">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-responsive img-hover" src="http://lorempixel.com/500/300/cats" alt="">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-responsive img-hover" src="http://lorempixel.com/500/300/transport" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->
    <!-- Portfolio Modals -->
    <?php
    include_once("partials/modal_projects/project1.inc");
    include_once("partials/modal_projects/project2.inc");
    include_once("partials/modal_projects/project3.inc");
    include_once("partials/modal_projects/project4.inc");
    include_once("partials/modal_projects/project5.inc");
    include_once("partials/modal_projects/project6.inc");
    ?>
    <!-- Features Section -->
    <div class="row" id="Features">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Champs d'expertise</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="col-md-6">
            <p>Notre domaine d'expertise est large et touche à plusieurs industries, dont:</p>
            <ul class="fa-ul">
                <li><i class="fa-li fa fa-hand-o-right"></i>Asphalte / Bitume
                </li>
                <li><i class="fa-li fa fa-hand-o-right"></i>Carrière de roches</li>
                <li><i class="fa-li fa fa-hand-o-right"></i>Industrie minière et tranformation des métaux</li>
                <li><i class="fa-li fa fa-hand-o-right"></i>Industrie alimentaire</li>
                <li><i class="fa-li fa fa-hand-o-right"></i>Industrie du recyclage</li>
                <li><i class="fa-li fa fa-hand-o-right"></i>Industrie divers</li>
            </ul>
            <p>Ce ne sont que quelque uns de nos domaines d'expertise, nous avons une expérience de plusieurs années
                et nous
                employons les meilleurs ingénieurs et techniciens pour implémenter nos solutions sur mesure afin de
                résoudre
                votre problème dans les meilleurs délais et de la meilleure façon.</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://lorempixel.com/500/300/technics" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well" id="call-to-action">
        <div class="row">
            <div class="col-md-8">
                <p>Nous sommes à votre écoute, envoyez-nous un message ou appellez-nous pour vous aider à
                    résoudre votre problème dans notre domaine d'expertise.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="contact.php">Contactez-nous</a>
            </div>
        </div>
    </div>

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

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 500000 //changes the speed
    })
</script>

</body>

</html>
