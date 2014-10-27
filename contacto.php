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

    $sSectionclass = 'Contacto';
    require_once 'header.php';

    ?>
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">Contacto</li>
                </ul>
            </div>
        </div>
    </div>
    </section>

    <section id="content">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Mantenganse en contacto utilizando los siguientes datos:</h4>
                <div class="col-lg-12" style="font-size: 145px; text-align: center;">
                    <ul class="social-network">
                        <li>
                            <a href="https://www.facebook.com/roxana.bavaro" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/roxybavaro" data-placement="top" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com/profile/view?id=33355404&trk=nav_responsive_tab_profile" data-placement="top" title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://es.pinterest.com/roxybavaro" data-placement="top" title="Pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com/roxybavaro" data-placement="top" title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
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
