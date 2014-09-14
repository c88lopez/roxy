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

    $sSectionclass = 'Otras incursiones';
    require_once 'header.php';

    ?>

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-pencil"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Otras incursiones</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">

            <article>
                <div class="post-video">
                    <div class="post-heading">
                        <h3>Tierra de encuentros: una producción de Magallanes Audiovisuales</h3>
                    </div>
                    <div class="video-container">
                        <iframe width="640" height="360"
                                src="//www.youtube.com/embed/8CNcphggB0A?feature=player_detailpage" frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <p style="text-align: right;">
                    Guión: Leonardo Magallanes - Roxana Bavaro<br />
                    <a href="http://magallanesaudiovisuales.com/" title="Magallanes Audio-Visuales"
                       target="_blank">
                        Magallanes Audio-Visuales
                    </a>
                </p>

            </article>

        </div>
    </section>

    <?php require_once 'footer.php'; ?>

    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php

require_once 'foot.php';
