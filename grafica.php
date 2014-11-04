<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Short File Description
 *
 * PHP version 5
 *
 * @category   aCategory
 * @package    aPackage
 * @subpackage aSubPackage
 * @author     anAuthor
 * @copyright  2014 a Copyright
 * @license    a License
 * @link       http://www.aLink.com
 */

require_once 'head.php';

?>
<div id="wrapper">

    <?php

    $sSectionclass = 'Grafica';
    require_once 'header.php';

    ?>

    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-pencil"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="col-lg-12">
                        <ul class="portfolio-categ filter">
                            <li style="font-size: 15px;" <?php if ('tribuno' === $_GET['categoria'] || !isset($_GET['categoria'])) echo 'class="active"';?>><a href="?categoria=tribuno" title="El Tribuno">El Tribuno</a></li>
                            <li style="font-size: 15px;" <?php if ('elfederal' === $_GET['categoria']) echo 'class="active"';?>><a href="?categoria=elfederal" title="Revista El Federal">Revista El Federal</a></li>
                            <li style="font-size: 15px;" <?php if ('italpress' === $_GET['categoria']) echo 'class="active"';?>><a href="?categoria=italpress" title="Revista El Federal">Revista Italpress</a></li>
                            <li style="font-size: 15px;" <?php if ('pymesclarin' === $_GET['categoria']) echo 'class="active"';?>><a href="?categoria=pymesclarin" title="Revista El Federal">Revista Pymes de Clarin</a></li>
                            <li style="font-size: 15px;" <?php if ('rumbos' === $_GET['categoria']) echo 'class="active"';?>><a href="?categoria=rumbos" title="Revista El Federal">Revista Rumbos</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <?php
                        if ('tribuno' === $_GET['categoria'] || !isset($_GET['categoria'])) {
                    ?>
                    <article>
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><a href="#">&nbsp;</a></h3>
                                </div>
                                <img src="contenido/grafica/el_tribuno/el_tribuno1.jpg" alt="" />
                            </div>
                            <p>
                                 Descripción El Tribuno
                            </p>
                    </article>

                    <?php
                        } else if ('elfederal' === $_GET['categoria']) {
                    ?>

                    <article>
                        <div class="post-slider">
                            <div class="post-heading">
                                <h3><a href="#">&nbsp;</a></h3>
                            </div>
                            <!-- start flexslider -->
                            <div id="post-slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="contenido/grafica/revista_el_federal/el_federal_vino_1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_el_federal/el_federal_vino_2.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_el_federal/el_federal_calidad_1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_el_federal/El_Federal_calidad_2.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <!-- end flexslider -->
                        </div>
                        <p>
                             Descripción El Federal
                        </p>
                    </article>

                    <?php
                        } else if ('italpress' === $_GET['categoria']) {
                    ?>

                    <article>
                        <div class="post-slider">
                            <div class="post-heading">
                                <h3><a href="#">&nbsp;</a></h3>
                            </div>
                            <!-- start flexslider -->
                            <div id="post-slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="contenido/grafica/revista_italpress/Italpress_moda_1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_italpress/Italpress_moda_2.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <!-- end flexslider -->
                        </div>
                        <p>
                             Descripción Italpress
                        </p>
                    </article>

                    <?php
                        } else if ('pymesclarin' === $_GET['categoria']) {
                    ?>

                    <article>
                        <div class="post-slider">
                            <div class="post-heading">
                                <h3><a href="#">&nbsp;</a></h3>
                            </div>
                            <!-- start flexslider -->
                            <div id="post-slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_credito_1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_credito_2.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_empretec_1.JPG" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_empretec_2.JPG" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_empretec_3.JPG" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_sub30_1.JPG" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_sub30_2.JPG" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_weemba_1.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <!-- end flexslider -->
                        </div>
                        <p>
                             Descripción El Pymes de Clarín
                        </p>
                    </article>

                    <?php
                        } else if ('rumbos' === $_GET['categoria']) {
                    ?>

                    <article>
                        <div class="post-slider">
                            <div class="post-heading">
                                <h3><a href="#">&nbsp;</a></h3>
                            </div>
                            <!-- start flexslider -->
                            <div id="post-slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="contenido/grafica/revista_rumbos/rumbos_alergia_1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_rumbos/rumbos_alergia_2.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_rumbos/rumbos_alergia_3.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_rumbos/rumbos_piel_1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_rumbos/rumbos_piel_2.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_rumbos/rumbos_piel_3.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="contenido/grafica/revista_rumbos/rumbos_piel_tapa.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <!-- end flexslider -->
                        </div>
                        <p>
                             Descripción Rumbos
                        </p>
                    </article>

                    <?php
                        }
                    ?>
                </div>

                <div class="col-lg-4">
                    <aside class="right-sidebar">

                        <div class="widget">
                            <h5 class="widgetheading">Twitter!</h5>
                            <a class="twitter-timeline"  href="https://twitter.com/roxybavaro" data-widget-id="526781920114257920">Tweets por @roxybavaro</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'footer.php'; ?>

</div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php

require_once 'foot.php';
