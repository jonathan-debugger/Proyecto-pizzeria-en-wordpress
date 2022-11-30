<?php 




function lapizzeria_setup(){

/* agregamos imagenes destacadas en el  bloque de gutember*/
    add_theme_support( 'post-thumbnails');
    
    /*Tamaños de imagenes*/
    add_image_size('nosotros', 437, 291, true);/* ancho y alto*/
    add_image_size('especialidades', 768, 515, true);
    add_image_size('especialidades_portrait',435, 526, true);
}

add_action('after_setup_theme','lapizzeria_setup');

/**CSS y JS **/

function lapizzeria_styles_scripts(){
    // agregar hojas  de estilos  
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css',array(), '8.0.1' );
    wp_enqueue_style('googleFonts','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap', array('normalize'), '1.0.0');
    wp_enqueue_style('slicknavcss','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css',array('normalize'),'1.0.10');
    wp_enqueue_style('style',get_stylesheet_uri(),array('normalize'),'1.0.0');


    /* registrar js */
    wp_enqueue_script('slicknavJS','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js' ,array('jquery'),'1.0.10', true); //colocar la version es importante para el cache
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0.0', true);   
    /* hook */
}
    add_action('wp_enqueue_scripts','lapizzeria_styles_scripts');

/** Menus **/
function lapizzeria_menus(){
    /*Aqui agregamos los menus */
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'redes-sociales'=> 'Redes sociales'
    ));
}
add_action('init','lapizzeria_menus');


/** REGISTRAMOS LA ZONA DE WIDGETS QUE IRAN EN EL SIDEBAR
 *  PERO DE TODAS FORMAS SE PUEDE USAR UN WIDGET EN CUALQUIER PARTE EN 
 *  EL HEADER O EN EL FOOTER NO IMPORTA
 * Zona de widgets **/
function lapizeria_widgets(){
    /* Ahora debemos colocar los titulos de cada  widget manualmente esto se hace agrupando o creando un grupo de
    widgets y ahi colocamos el titulo */
    register_sidebar(
        array(
        'name' => 'Blog_sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div class="widget" >',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        )
    );

}
add_action('widgets_init','lapizeria_widgets');

/** Agregar botones a paginador **/

function lapizzeria_botones_paginador(){
    return 'class="boton boton-secundario"';
}
/* Con el add_filter  vamos a modificar una propiedad o un elemento en especifico
    en este caso estamos modificando los botones de siguiente y anterior del home o blog  
    agregadoles clases*/
add_filter('next_posts_link_attributes','lapizzeria_botones_paginador');
add_filter('previous_posts_link_attributes','lapizzeria_botones_paginador');
