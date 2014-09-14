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

            $sSectionclass = 'Quien soy';
            require_once 'header.php';

        ?>

        <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                            <li class="active">Quién Soy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="featured">
            <!-- start slider -->
            <div class="container">
                <div class="row"></div>

                <div class="row">
                    <div class="col-lg-12">

                        <p class="lead">
                            <em>Soy periodista, y escritora.</em>
                        </p>

                        <p>
                            Estudié comunicación en la U.C.A., antes de recibirme comencé trabajando en radio (Radio La Red, Buenos Aires) y en gráfica, Corresponsalía en Buenos Aires, del diario El Tribuno de Salta.
                        </p>

                        <p>
                            Continué mi carrera periodística en diversos medios gráficos: Revista de temática agraria, Leguas de Campo; Revista El Federal, Revista Rumbos (dominical de la Voz del Interior y Los Andes de Mendoza entre otras provincias) y la revista PyMES de Clarín.
                        </p>

                        <p>
                            Asimismo, llevo un camino recorrido en radio, de la mano de los programas Doble Click, los programas Eureka y Mejor te Cuento (Radio Palermo) y  Graves y Agudos (Radio Argentina, Cooperativa, FM La Isla, Radio Belgrano); y ahora despunto el vicio recomendando libros en Radio FM Tecno, la radio de la U.T.N.
                        </p>

                        <p>
                            También tuve experiencia en televisión, en la producción del programa Infocampo (canal 9).
                        </p>

                        <p>
                        Y finalmente, un camino aparte en la comunicación institucional: tanto en consultoría, comunicación política, community manager , comunicación agraria y actualmente, trabajo en el paraíso: en prensa cultural, rodeada de libros y autores.
                        </p>

                        <p>
                            Sobre todas las cosas, soy una buscadora constante de horizontes y de puentes hechos con la palabra...
                        </p>

                        <p style="text-align: right;">
                            <em>¡Gracias por acompañarme!</em>
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section id="featured">
            <!-- start slider -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="heading">Últimos Trabajos</h4>
                        <div class="row">
                            <section id="projects">
                                <ul id="thumbs" class="portfolio">

                                    <!-- Item Project and Filter Name -->
                                    <li class="col-lg-3 design" data-id="id-0" data-type="web">
                                        <div class="item-thumbs">
                                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rumbos Alergia" href="contenido/grafica/revista_rumbos/rumbos_alergia_1.jpg">
                                                <span class="overlay-img"></span>
                                                <span class="overlay-img-thumb font-icon-plus"></span>
                                            </a>
                                            <!-- Thumb Image and Description -->
                                            <img src="contenido/grafica/revista_rumbos/rumbos_alergia_1.jpg" alt="Descripción trabajo 1">
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="El Federal" href="contenido/grafica/revista_el_federal/el_federal_vino_1.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="contenido/grafica/revista_el_federal/el_federal_vino_1.jpg" alt="Descripción trabajo 2">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 3" href="contenido/grafica/revista_italpress/Italpress_moda_1.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="contenido/grafica/revista_italpress/Italpress_moda_1.jpg" alt="Descripción trabajo 3">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 4" href="contenido/grafica/revista_pymes_de_clarin/pymes_credito_1.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="contenido/grafica/revista_pymes_de_clarin/pymes_credito_1.jpg" alt="Descripción trabajo 4">
                                    </li>
                                    <!-- End Item Project -->

                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once 'footer.php'; ?>

    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php

require_once 'foot.php';
