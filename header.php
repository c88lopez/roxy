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

?>

<!-- start header -->
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span>Roxy</span> Bavaro</a>
                <div class="col-lg-6" style="font-size: 16px;">
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
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li <?php echo ('Quien soy'         === $sSectionclass) ? 'class="active"' : ''; ?>><a href="index.php">Quién soy</a></li>
                    <li <?php echo ('Grafica'           === $sSectionclass) ? 'class="active"' : ''; ?>><a href="grafica.php">Gráfica</a></li>
                    <li <?php echo ('Radio'             === $sSectionclass) ? 'class="active"' : ''; ?>><a href="radio.php">Radio</a></li>
                    <li <?php echo ('Word Builder'      === $sSectionclass) ? 'class="active"' : ''; ?>><a href="word_builder.php">Word Builder</a></li>
                    <li <?php echo ('Palabras de mas'   === $sSectionclass) ? 'class="active"' : ''; ?>><a href="palabras_de_mas.php">Palabras de más</a></li>
                    <li <?php echo ('Otras incursiones' === $sSectionclass) ? 'class="active"' : ''; ?>><a href="index.php">Otras incursiones</a></li>
                    <li <?php echo ('Contacto'          === $sSectionclass) ? 'class="active"' : ''; ?>><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->