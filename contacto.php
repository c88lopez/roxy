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
                <h4>Mantenganse en contacto con nosotros completando <strong>este formulario</strong></h4>
                <form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
                    <div id="sendmessage">
                         Tu mensaje ha sido enviado. Gracias!
                    </div>
                    <div class="row">
                        <div class="col-lg-4 field">
                            <input type="text" name="name" placeholder="* Nombre y Apellido" data-rule="maxlen:4" data-msg="Por favor, ingrese al menos 4 caracteres" />
                            <div class="validation">
                            </div>
                        </div>
                        <div class="col-lg-4 field">
                            <input type="text" name="email" placeholder="* Correo Electrónico" data-rule="email" data-msg="Por favor, ingrese un correo electronico válido" />
                            <div class="validation">
                            </div>
                        </div>
                        <div class="col-lg-4 field">
                            <input type="text" name="subject" placeholder="Asunto" data-rule="maxlen:4" data-msg="Por favor, ingrese al menos 4 caracteres" />
                            <div class="validation">
                            </div>
                        </div>
                        <div class="col-lg-12 margintop10 field">
                            <textarea rows="12" name="message" class="input-block-level" placeholder="* Su mensaje aquí..." data-rule="required" data-msg="Por favor, escriba un mensaje"></textarea>
                            <div class="validation">
                            </div>
                            <p>
                                <button class="btn btn-theme margintop10 pull-left" type="submit">Enviar mensaje</button>
                                <span class="pull-right margintop20">* Por favor, ingrese todos los campos.</span>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>

    <?php require_once 'footer.php'; ?>

</div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php

require_once 'foot.php';
