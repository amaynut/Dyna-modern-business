<footer>
    <div class="container">
        <div class="row">
            <br/>

            <div class="col-md-4">
                   <span class="fa-stack fa-3x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa  fa-headphones fa-stack-1x fa-inverse"></i>
                </span>
                <br>
                <h4>Nous contacter</h4>
                <ul class="footertext list-unstyled">
                    <li><i class="fa fa-phone"></i> Téléphone: 514.337.3377</li>
                    <li><i class="fa fa-fax"></i> Fax: 514-832-0989</li>
                    <li><i class="fa fa-at"></i> Courriel: <a href="">dynagroup@dynagroup-tech.com</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-3x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa  fa-map-marker fa-stack-1x fa-inverse"></i>
                </span>
                <br>
                <h4>Nous rendre visite</h4>

                <p class="footertext"><i class="fa fa-clock-o"></i>
                    <abbr title="Hours d'affaires">H</abbr>: Lundi - Vendredi: 8:00 H à 17:00 H</p>
                <address>
                    <ul class="footertext list-unstyled">
                        <li> Dynagroup Technologies</li>
                        <li> 4070 Boulevard Poirier,</li>
                        <li> Ville St-Laurent, Québec,</li>
                        <li>Canada, H4R 2A5</li>
                    </ul>
                </address>

            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-3x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa  fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
                </span>
                <br>
                <h4>Retrouvez-nous sur le web</h4>
                <?php
                include("partials/socialbar.inc");
                ?>
            </div>
        </div>
        <div class="row copyright footertext">
            <script>var today = new Date();</script>
            <p>
                <script>document.write(today.toLocaleDateString());</script>
            </p>
            <p>Dynagroup Technologies Copyright &copy; 1998-
                <script>document.write(today.getFullYear());</script>
            </p>
        </div>
    </div>
</footer>