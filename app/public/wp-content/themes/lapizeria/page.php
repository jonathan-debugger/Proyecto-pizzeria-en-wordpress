<?php 
/** page se utliza para paginas estaticas que solo tienen una entrada como por ejemplo "nosotros" **/
 get_header();

 while (have_posts()): the_post();
 /* lo que hacemos es agregar el contenido duplicado
    accedemos al metodo get_template_parts el cual nos permite acceder 
    a otros archivos o contenido que dejamos en otra parte para despues 
    llamarlo y asi evitar que se duplique
*/
        get_template_part('template-parts/loop','contenido');

 endwhile; 
 
 
 get_footer(); 

