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
                <a class="navbar-brand" href="index.php"><span>Roxy</span>Bavaro</a>
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