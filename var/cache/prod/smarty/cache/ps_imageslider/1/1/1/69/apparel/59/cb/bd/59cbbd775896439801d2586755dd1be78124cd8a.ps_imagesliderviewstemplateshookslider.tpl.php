<?php
/* Smarty version 4.3.1, created on 2024-07-29 19:29:21
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a833e1e870c0_18694978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1722299258,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66a833e1e870c0_18694978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>    <div id="carousel" data-ride="carousel" class="carousel slide home-image-slider" data-interval="5000" data-wrap="true" data-pause="hover">
        <div class="image-slider">
            <ul class="carousel-inner" role="listbox">
                                    <li class="carousel-item active" role="option" aria-hidden="false">
                        <div class="slider-image" style="background: url(http://localhost/sanguches/modules/ps_imageslider/images/sample-1.jpg) center center no-repeat; background-size: cover;">
                            <a href="https://www.prestashop-project.org">
                                <figure>
                                    <img src="http://localhost/sanguches/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1">
                                                                            <figcaption class="caption">
                                            <h2 class="display-1 text-uppercase">Sample 1</h2>
                                            <div class="caption-description">
                                                <h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p>
                                            </div>
                                        </figcaption>
                                                                    </figure>
                            </a>
                        </div>
                    </li>
                                    <li class="carousel-item " role="option" aria-hidden="true">
                        <div class="slider-image" style="background: url(http://localhost/sanguches/modules/ps_imageslider/images/sample-2.jpg) center center no-repeat; background-size: cover;">
                            <a href="https://www.prestashop-project.org">
                                <figure>
                                    <img src="http://localhost/sanguches/modules/ps_imageslider/images/sample-2.jpg" alt="sample-2">
                                                                            <figcaption class="caption">
                                            <h2 class="display-1 text-uppercase">Sample 2</h2>
                                            <div class="caption-description">
                                                <h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p>
                                            </div>
                                        </figcaption>
                                                                    </figure>
                            </a>
                        </div>
                    </li>
                                    <li class="carousel-item " role="option" aria-hidden="true">
                        <div class="slider-image" style="background: url(http://localhost/sanguches/modules/ps_imageslider/images/sample-3.jpg) center center no-repeat; background-size: cover;">
                            <a href="https://www.prestashop-project.org">
                                <figure>
                                    <img src="http://localhost/sanguches/modules/ps_imageslider/images/sample-3.jpg" alt="sample-3">
                                                                            <figcaption class="caption">
                                            <h2 class="display-1 text-uppercase">Sample 3</h2>
                                            <div class="caption-description">
                                                <h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p>
                                            </div>
                                        </figcaption>
                                                                    </figure>
                            </a>
                        </div>
                    </li>
                            </ul>
            <div class="direction" aria-label="Botones del carrusel">
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="icon-prev hidden-xs" aria-hidden="true">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>

                    </span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
<?php }
}
