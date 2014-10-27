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

    $sSectionclass = 'Radio';
    require_once 'header.php';

    ?>

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-headphones"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">

                <?php
                    $sTab = 'utn';
                    if (isset($_GET['tab'])) {
                        $sTab = $_GET['tab'];
                    }
                ?>

                <div class="col-lg-12">
                    <ul class="portfolio-categ filter">
                        <li <?php if ('utn' === $sTab) echo 'class="active"';?>><a href="?tab=utn" title="FM Tecno Radio UTN">FM Tecno Radio UTN</a></li>
                        <li <?php if ('gya' === $sTab) echo 'class="active"';?>><a href="?tab=gya" title="Graves y Agudos">Graves y Agudos</a></li>
                        <li <?php if ('folklorica' === $sTab) echo 'class="active"';?>><a href="?tab=folklorica" title="Radio Nacional Folklorica">Radio Nacional Folklorica</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <?php
                    if ('utn' === $sTab) {
                ?>
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h4>CULTURA_EN_TRANSITO_1</h4>
                        <audio controls>
                            <source src="contenido/radio/FM_TECTO_RADIO_UTN/CULTURA_EN_TRANSITO_1.wav" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                        <div class="clearfix"></div>
                    </div>

                    <div class="col-lg-4">
                        <h4>MICROCULTURA_I</h4>
                        <audio controls>
                            <source src="contenido/radio/FM_TECTO_RADIO_UTN/MICROCULTURA_I.wav" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                        <div class="clearfix"></div>
                    </div>

                    <div class="col-lg-4">
                        <h4>MICROCULTURA_II</h4>
                        <audio controls>
                            <source src="contenido/radio/FM_TECTO_RADIO_UTN/MICROCULTURA_II.wav" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                        <div class="clearfix"></div>
                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <h4>MICROCULTURA_III</h4>
                        <audio controls>
                            <source src="contenido/radio/FM_TECTO_RADIO_UTN/MICROCULTURA_III.wav" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                        <div class="clearfix"></div>
                    </div>
                </div>

                <?php } else if ('gya' === $sTab) { ?>

                <?php } else if ('folklorica' === $sTab) { ?>

                    <div class="col-lg-12">
                        <h3>Programa 1</h3>
                        <div class="col-lg-4">
                            <h4>Audio_1</h4>
                            <audio controls>
                                <source src="contenido/radio/RADIO_NACIONAL_FOLKLORICA/prograa%201-%2019%20marz%202014/roxy%20RN%20programa%202%20(1).m4a" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-4">
                            <h4>Audio_2</h4>
                            <audio controls>
                                <source src="contenido/radio/FM_TECTO_RADIO_UTN/MICROCULTURA_I.wav" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-4">
                            <h4>Audio_3</h4>
                            <audio controls>
                                <source src="contenido/radio/FM_TECTO_RADIO_UTN/MICROCULTURA_II.wav" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>

                            <div class="clearfix"></div>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <h4>Audio_4</h4>
                            <audio controls>
                                <source src="contenido/radio/FM_TECTO_RADIO_UTN/MICROCULTURA_III.wav" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php require_once 'footer.php'; ?>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php

require_once 'foot.php';