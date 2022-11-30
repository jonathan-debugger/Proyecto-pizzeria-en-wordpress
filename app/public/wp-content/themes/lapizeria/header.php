<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
<header class="site-header">
    <div class="contenedor">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/'));?>"> <!-- Me va imprimir la pagina principal de el sitio-->
                <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="Logo del sitio">
            </a>
        </div>
        <div class="informacion-header">
            <div class="redes-sociales">
                <?php
                    $args = array(
                        'theme_location' => 'redes-sociales',
                        'container' => 'nav',
                        'container_class' => 'sociales',
                        /* La clase sr-text se utiliza para tema de accesibilidad asi los navegadores con esta clase pueden leer el texto que se encuentra por eso lo colocamos antes del texto  del enlace  */
                        'link_before' => '<span class="sr-text">', /*Agregarmos esta parte justo antes del texto del  enlace  que  genera automaticamente wordpress*/
                        'link_after' => '</span>' /* y despues agregamos el cierre  */
                    );
                    wp_nav_menu($args);
                    
                ?>
                <!-- Todo: Agregar menu -->
            </div><!--.Redes sociales-->
            <div class="direccion">
                <p>8179 bay avenue View, CA 94043</p>
                <p>Teléfono: 3202259000</p>

            </div>
        </div><!--.Informacion header-->
    </div>
</header>


<div class="menu-principal">
    <div class="contenedor">
        <?php 
        $args= array(
            'theme_location'=> 'header-menu',
            'container' => 'nav',
            'container_class' => 'menu-sitio',
            'container_id' => 'menu'
        );
        wp_nav_menu($args);
        ?>
    </div>


</div>
