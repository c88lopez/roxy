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

    <div id="wrapper" xmlns="http://www.w3.org/1999/html">

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
            <div class="container" style="/*background: url('contenido/img/1.jpg') no-repeat center fixed;*/">
                <div class="row"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12" style="height: 200px;">
                            <div class="col-lg-9" style="height: inherit; text-align: center; padding-top: 44px;">
                                <p class="lead" style=" font-size: 43px;">
                                    <em>
                                        Soy periodista...
                                        <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y escritora.
                                    </em>
                                </p>
                            </div>

                            <div class="col-lg-3" style="background-image: url('contenido/img/2.jpg'); height: inherit;"></div>
                        </div>

                        <div class="col-lg-12" style="font-size: 16px;">

                            <p>&nbsp;</p>

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
            </div>
        </section>

        <?php require_once 'footer.php'; ?>

    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php

require_once 'foot.php';
