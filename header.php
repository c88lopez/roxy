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
                    <li <?php echo ('Home'      === $sSectionclass)?'class="active"':''; ?>><a href="index.php">Home</a></li>
                    <li <?php echo ('Portfolio' === $sSectionclass)?'class="active"':''; ?>><a href="portfolio.php">Portfolio</a></li>
                    <li <?php echo ('Blog'      === $sSectionclass)?'class="active"':''; ?>><a href="blog.php">Blog</a></li>
                    <li <?php echo ('Contacto'  === $sSectionclass)?'class="active"':''; ?>><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->